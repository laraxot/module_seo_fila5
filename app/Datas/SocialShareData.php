<?php

declare(strict_types=1);

<<<<<<< .merge_file_CKhioL
namespace Modules\Seo\Datas;
=======
<<<<<<< .merge_file_mawh8O
namespace Modules\Seo\Datas;
=======
namespace Modules\Seo\Data;
>>>>>>> .merge_file_JI2xzv
>>>>>>> .merge_file_iqXpkr

use Spatie\LaravelData\Data;

/**
 * Data Transfer Object for social sharing information.
 */
class SocialShareData extends Data
{
    /**
     * Create a new SocialShareData instance.
     *
     * @param  string  $url  The URL to share.
     * @param  string|null  $title  The title of the content.
     * @param  string|null  $text  Additional text or description.
     * @param  string|null  $image  Canonical image URL.
     * @param  string|null  $hashtags  Comma-separated list of hashtags.
     * @param  string|null  $via  The Twitter handle (without @).
     * @param  array<int, string>  $platforms  List of enabled platforms.
     */
    public function __construct(
        public string $url,
        public ?string $title = null,
        public ?string $text = null,
        public ?string $image = null,
        public ?string $hashtags = null,
        public ?string $via = null,
<<<<<<< .merge_file_CKhioL
=======
<<<<<<< .merge_file_mawh8O
>>>>>>> .merge_file_iqXpkr
        public array $platforms = [
            'facebook', 'twitter', 'linkedin', 'whatsapp', 'telegram', 'copy',
        ],
    ) {}
<<<<<<< .merge_file_CKhioL
=======
=======
        public array $platforms = ['facebook', 'twitter', 'linkedin', 'whatsapp', 'telegram', 'copy'],
    ) {
    }
>>>>>>> .merge_file_JI2xzv
>>>>>>> .merge_file_iqXpkr
}
