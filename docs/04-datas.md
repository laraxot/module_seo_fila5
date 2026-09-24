# Datas in Seo Module

All data objects in the Seo module use the `Spatie\LaravelData\Data` contract for type safety and serialization.

## Available Data Classes

Located in `Seo/app/Datas/`:

- `MetatagData` - Meta tag data structure for SEO optimization
- `SocialShareData` - Social sharing metadata (Open Graph, Twitter Cards)

## Usage Examples

### Creating Meta Tag Data
```php
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Seo\Datas\MetatagData;

// Verified against app/Datas/MetatagData.php: the constructor takes a single
// array bag ($data), read back through getTitle()/getDescription()/etc. In
// practice this class is populated via the Metatag facade
// (Metatag::setTitle(), Metatag::setDescription(), ...), not constructed
// directly with named ::from() keys.
$metatag = new MetatagData([
    'title' => 'Page Title',
    'description' => 'Page Description',
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
use Modules\Seo\app\Datas\MetatagData;

$metatag = MetatagData::from([
    'title' => 'Page Title',
    'description' => 'Page Description',
    'keywords' => ['keyword1', 'keyword2'],
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
]);
```

### Social Sharing Data
```php
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Seo\Datas\SocialShareData;

// SocialShareData has named constructor properties: url (required), title,
// text, image, hashtags, via, platforms. There is no `description` property
// (use `text`).
$sharing = SocialShareData::from([
    'url' => 'https://example.com/page',
    'title' => 'Shared Title',
    'text' => 'Shared description',
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
use Modules\Seo\app\Datas\SocialShareData;

$sharing = SocialShareData::from([
    'title' => 'Shared Title',
    'description' => 'Shared Description',
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
    'image' => 'https://example.com/image.jpg',
]);
```

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
> Namespace note: the correct namespace is `Modules\Seo\Datas` (module root maps
> to `app/` via PSR-4 — do not include an `app\` segment). An earlier revision
> of this doc had `Modules\Seo\app\Datas\...`, which does not exist.

=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
## Migration Notes

Previously located in `app/Data/` folder, all data classes were migrated to `app/Datas/` following the Laraxot standard:
- All classes extend `Spatie\LaravelData\Data`
- Naming convention: `*Data.php`
- Automatic serialization/deserialization support
- Full PHPStan level max compliance