<?php

declare(strict_types=1);

namespace Modules\Seo\Facades;

use DateTimeInterface;
use Illuminate\Support\Facades\Facade;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Seo\Adapters\MetatagFacadeAdapter;
use Modules\Seo\Datas\MetatagData;
=======
use Modules\Seo\Adapters\MetatagManager;
use Modules\Seo\Data\MetatagData;
>>>>>>> cf01f0b (.)
=======
use Modules\Seo\Data\MetatagData;
use Modules\Seo\Services\MetatagService;
>>>>>>> 7ec200b (.)
=======
use Modules\Seo\Data\MetatagData;
use Modules\Seo\Services\MetatagService;
>>>>>>> d20252d (.)
=======
use Modules\Seo\Data\MetatagData;
use Modules\Seo\Services\MetatagService;
>>>>>>> dbf8b8d (.)
=======
use Modules\Seo\Data\MetatagData;
use Modules\Seo\Services\MetatagService;
>>>>>>> 77e0353 (.)
=======
use Modules\Seo\Data\MetatagData;
use Modules\Seo\Services\MetatagService;
>>>>>>> fc52fe0 (.)

/**
 * @method static MetatagData get()
 * @method static void set(array<string, mixed> $data)
 * @method static void setTitle(string $title)
 * @method static void setDescription(string $description)
 * @method static void setKeywords(string $keywords)
 * @method static void setColors(array<string, string> $colors)
 * @method static void setRobots(string $robots)
 * @method static void setCanonical(string $canonical)
 * @method static void setImage(string $image)
 * @method static void setLocale(string $locale)
 * @method static void setType(string $type)
 * @method static void setSiteName(string $siteName)
 * @method static void setUrl(string $url)
 * @method static void setAuthor(string $author)
 * @method static void setPublishedTime(DateTimeInterface $time)
 * @method static void setModifiedTime(DateTimeInterface $time)
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @see MetatagFacadeAdapter
=======
 * @see MetatagManager
>>>>>>> cf01f0b (.)
=======
 * @see MetatagService
>>>>>>> 7ec200b (.)
=======
 * @see \Modules\Seo\Services\MetatagService
>>>>>>> d20252d (.)
=======
 * @see \Modules\Seo\Services\MetatagService
>>>>>>> dbf8b8d (.)
=======
 * @see \Modules\Seo\Services\MetatagService
>>>>>>> 77e0353 (.)
=======
 * @see MetatagService
>>>>>>> fc52fe0 (.)
 */
class Metatag extends Facade
{
    /**
     * Get the registered name of the component.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
    protected static function getFacadeAccessor(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return MetatagFacadeAdapter::class;
=======
        return MetatagManager::class;
>>>>>>> cf01f0b (.)
=======
        return MetatagService::class;
>>>>>>> 7ec200b (.)
=======
=======
>>>>>>> dbf8b8d (.)
=======
>>>>>>> 77e0353 (.)
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return MetatagService::class;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d20252d (.)
=======
>>>>>>> dbf8b8d (.)
=======
>>>>>>> 77e0353 (.)
=======
     */
    protected static function getFacadeAccessor(): string
    {
        return MetatagService::class;
>>>>>>> fc52fe0 (.)
    }
}
