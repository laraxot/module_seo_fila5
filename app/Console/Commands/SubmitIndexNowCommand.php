<?php

declare(strict_types=1);

namespace Modules\Seo\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Modules\Seo\Actions\IndexNow\SubmitIndexNowAction;
use Modules\Seo\Actions\Sitemap\BuildSitemapAction;
use Modules\Seo\Datas\SeoConfigData;

use function Safe\json_decode;
use function Safe\json_encode;
use function Safe\preg_match_all;

/**
 * `php artisan seo:indexnow`: invia a IndexNow le URL della sitemap non ancora inviate (pagine, segnalazioni e articoli
 * nuovi). `--all` reinvia tutto, `--url=` invia URL precise, `--dry-run` conta senza inviare.
 *
 * Gira a ogni deploy (deploy.sh): IndexNow vuole URL nuove o cambiate, non la sitemap intera ogni volta; l'elenco gia'
 * inviato sta in `storage/app/seo/indexnow-submitted.json`. Senza chiave configurata non fa nulla.
 *
 * @see Modules/Seo/docs/adr/search-engine-presence.md
 * @see Modules/Seo/docs/contracts/submit-index-now-action.md
 */
final class SubmitIndexNowCommand extends Command
{
    public const string STATE_FILE = 'seo/indexnow-submitted.json';

    /** @var string */
    protected $signature = 'seo:indexnow {--all : reinvia tutte le URL della sitemap} {--url=* : URL da inviare} {--dry-run : conta senza inviare}';

    /** @var string */
    protected $description = 'Invia a IndexNow (Bing, Yandex, Seznam, Naver) le URL nuove della sitemap';

    public function handle(SubmitIndexNowAction $submit): int
    {
        if (SeoConfigData::make()->indexNowKey() === null) {
            $this->info('IndexNow spento: nessuna chiave in seo.indexnow_key.');

            return self::SUCCESS;
        }

        $explicit = $this->explicitUrls();
        $sitemap = $explicit === [] ? $this->sitemapUrls() : [];
        $already = $this->option('all') === true || $explicit !== [] ? [] : $this->submittedUrls();
        $urls = $explicit !== [] ? $explicit : array_values(array_diff($sitemap, $already));

        if ($urls === []) {
            $this->info('Nessuna URL nuova da inviare.');

            return self::SUCCESS;
        }
        if ($this->option('dry-run') === true) {
            $this->info(count($urls).' URL da inviare (dry run).');

            return self::SUCCESS;
        }

        $result = $submit->execute($urls);
        $this->info($result['submitted'].' URL inviate, '.$result['skipped'].' scartate, risposte: '.implode(', ', $result['statuses']));

        if ($explicit === [] && $result['submitted'] === count($urls)) {
            $this->rememberSubmitted([...$already, ...$urls]);
        }

        return $result['submitted'] === count($urls) - $result['skipped'] ? self::SUCCESS : self::FAILURE;
    }

    /**
     * @return list<string>
     */
    private function explicitUrls(): array
    {
        $option = $this->option('url');

        return is_array($option) ? array_values(array_filter($option, is_string(...))) : [];
    }

    /**
     * @return list<string>
     */
    private function sitemapUrls(): array
    {
        $matches = [];
        preg_match_all('#<loc>([^<]+)</loc>#', app(BuildSitemapAction::class)->execute(), $matches);

        return array_values(array_unique(array_map(
            static fn (string $loc): string => html_entity_decode($loc, ENT_XML1 | ENT_QUOTES, 'UTF-8'),
            $matches[1],
        )));
    }

    /**
     * @return list<string>
     */
    private function submittedUrls(): array
    {
        $disk = Storage::disk('local');
        if (! $disk->exists(self::STATE_FILE)) {
            return [];
        }
        $data = json_decode((string) $disk->get(self::STATE_FILE), true);

        return is_array($data) ? array_values(array_filter($data, is_string(...))) : [];
    }

    /**
     * @param  list<string>  $urls
     */
    private function rememberSubmitted(array $urls): void
    {
        $unique = array_values(array_unique($urls));
        sort($unique);
        Storage::disk('local')->put(self::STATE_FILE, json_encode($unique, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
    }
}
