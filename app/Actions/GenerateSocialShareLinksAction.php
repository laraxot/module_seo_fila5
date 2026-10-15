<?php

declare(strict_types=1);

namespace Modules\Seo\Actions;

use Modules\Seo\Datas\SocialShareData;
use Spatie\QueueableAction\QueueableAction;

/**
 * Action to generate localized and encoded social media sharing links.
 *
 * Builder di URL di condivisione (scopo SEO sociale): riceve un
 * SocialShareData tipizzato e restituisce le URL di condivisione per
 * piattaforma. Gli argomenti di urlencode() sono sempre string (mai mixed):
 * nessun wrapper Safe e nessun rawurlencode (semantica diversa, '+' vs '%20').
 */
class GenerateSocialShareLinksAction
{
    use QueueableAction;

    public const string FACEBOOK_SHARE_URL = 'https://www.facebook.com/sharer/sharer.php?u=';

    public const string TWITTER_INTENT_URL = 'https://twitter.com/intent/tweet?url=';

    public const string LINKEDIN_SHARE_URL = 'https://www.linkedin.com/sharing/share-offsite/?url=';

    public const string WHATSAPP_SEND_URL = 'https://api.whatsapp.com/send?text=';

    public const string TELEGRAM_SHARE_URL = 'https://t.me/share/url?url=';

    /**
     * Execute the action to construct sharing URLs.
     *
     * @param  SocialShareData  $data  The sharing data.
<<<<<<< .merge_file_2BDzFS
     * @return array{facebook: string, twitter: string, linkedin: string, whatsapp: string, telegram: string, copy: string} Keyed by platform name, value is the sharing URL.
=======
     * @return array<string, string> Keyed by platform name, value is the sharing URL.
>>>>>>> .merge_file_n3UC8M
     */
    public function execute(SocialShareData $data): array
    {
        $text = $data->text ?? $data->title ?? '';
        $via = $data->via ?? '';
        $hashtags = $data->hashtags ?? '';

        return [
<<<<<<< .merge_file_2BDzFS
            'facebook' => self::FACEBOOK_SHARE_URL.urlencode($data->url),
            'twitter' => self::TWITTER_INTENT_URL.urlencode($data->url)
                .'&text='.urlencode($text)
                .($via ? '&via='.urlencode($via) : '')
                .($hashtags ? '&hashtags='.urlencode($hashtags) : ''),
            'linkedin' => self::LINKEDIN_SHARE_URL.urlencode($data->url),
            'whatsapp' => self::WHATSAPP_SEND_URL.urlencode($text.' '.$data->url),
            'telegram' => self::TELEGRAM_SHARE_URL.urlencode($data->url).'&text='.urlencode($text),
=======
            'facebook' => 'https://www.facebook.com/sharer/sharer.php?u='.urlencode($data->url),
            'twitter' => 'https://twitter.com/intent/tweet?url='.urlencode($data->url)
                .'&text='.urlencode($text)
                .($data->via ? '&via='.urlencode($data->via) : '')
                .($data->hashtags ? '&hashtags='.urlencode($data->hashtags) : ''),
            'linkedin' => 'https://www.linkedin.com/sharing/share-offsite/?url='.urlencode($data->url),
            'whatsapp' => 'https://api.whatsapp.com/send?text='.urlencode($text.' '.$data->url),
            'telegram' => 'https://t.me/share/url?url='.urlencode($data->url).'&text='.urlencode($text),
>>>>>>> .merge_file_n3UC8M
            'copy' => $data->url,
        ];
    }
}
