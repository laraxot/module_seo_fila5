<?php

declare(strict_types=1);

namespace Modules\Seo\Data;

use InvalidArgumentException;
use Safe\Exceptions\UrlException;
use Spatie\LaravelData\Data;

use function Safe\parse_url;

/**
 * Data Transfer Object for social sharing information.
 */
class SocialShareData extends Data
{
    /**
     * Create a new SocialShareData instance.
     *
     * @param string $url The URL to share.
     * @param string|null $title The title of the content.
     * @param string|null $text Additional text or description.
     * @param string|null $image Canonical image URL.
     * @param string|null $hashtags Comma-separated list of hashtags.
     * @param string|null $via The Twitter handle (without @).
     * @param array<int, string> $platforms List of enabled platforms.
     */
    public function __construct(
        public string $url,
        public ?string $title = null,
        public ?string $text = null,
        public ?string $image = null,
        public ?string $hashtags = null,
        public ?string $via = null,
        public array $platforms = ['facebook', 'twitter', 'linkedin', 'whatsapp', 'telegram', 'copy'],
    ) {
        self::assertHttpUrl($url, 'url');

        if ($image !== null) {
            self::assertHttpUrl($image, 'image');
        }
    }

    private static function assertHttpUrl(string $value, string $field): void
    {
        try {
            $scheme = parse_url($value, PHP_URL_SCHEME);
        } catch (UrlException) {
            $scheme = null;
        }

        if (! in_array($scheme, ['http', 'https'], true) || ! filter_var($value, FILTER_VALIDATE_URL)) {
            throw new InvalidArgumentException(sprintf('%s must be a valid http/https URL, got: %s', $field, $value));
        }
    }
}
