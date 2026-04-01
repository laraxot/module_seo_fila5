<?php

declare(strict_types=1);

namespace Modules\Seo\Actions;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Seo\Datas\SocialShareData;
=======
use Modules\Seo\Data\SocialShareData;
>>>>>>> cf01f0b (.)
=======
use Modules\Seo\Data\SocialShareData;
>>>>>>> 7ec200b (.)
=======
use Modules\Seo\Data\SocialShareData;
>>>>>>> d20252d (.)
use Spatie\QueueableAction\QueueableAction;

/**
 * Action to generate localized and encoded social media sharing links.
 */
class GenerateSocialShareLinksAction
{
    use QueueableAction;

    /**
     * Execute the action to construct sharing URLs.
     *
<<<<<<< HEAD
     * @param  SocialShareData  $data  The sharing data.
=======
     * @param SocialShareData $data The sharing data.
>>>>>>> d20252d (.)
     * @return array<string, string> Keyed by platform name, value is the sharing URL.
     */
    public function execute(SocialShareData $data): array
    {
        $text = $data->text ?? $data->title ?? '';

        return [
<<<<<<< HEAD
            'facebook' => 'https://www.facebook.com/sharer/sharer.php?u='.urlencode($data->url),
            'twitter' => 'https://twitter.com/intent/tweet?url='.urlencode($data->url)
                .'&text='.urlencode($text)
                .($data->via ? '&via='.urlencode($data->via) : '')
                .($data->hashtags ? '&hashtags='.urlencode($data->hashtags) : ''),
            'linkedin' => 'https://www.linkedin.com/sharing/share-offsite/?url='.urlencode($data->url),
            'whatsapp' => 'https://api.whatsapp.com/send?text='.urlencode($text.' '.$data->url),
            'telegram' => 'https://t.me/share/url?url='.urlencode($data->url).'&text='.urlencode($text),
=======
            'facebook' => "https://www.facebook.com/sharer/sharer.php?u=".urlencode($data->url),
            'twitter' => "https://twitter.com/intent/tweet?url=".urlencode($data->url)
                ."&text=".urlencode($text)
                .($data->via ? "&via=".urlencode($data->via) : "")
                .($data->hashtags ? "&hashtags=".urlencode($data->hashtags) : ""),
            'linkedin' => "https://www.linkedin.com/sharing/share-offsite/?url=".urlencode($data->url),
            'whatsapp' => "https://api.whatsapp.com/send?text=".urlencode($text." ".$data->url),
            'telegram' => "https://t.me/share/url?url=".urlencode($data->url)."&text=".urlencode($text),
>>>>>>> d20252d (.)
            'copy' => $data->url,
        ];
    }
}
