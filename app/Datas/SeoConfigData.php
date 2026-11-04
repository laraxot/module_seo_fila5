<?php

declare(strict_types=1);

namespace Modules\Seo\Datas;

use Modules\Xot\Datas\Concerns\MakesFromTenantConfig;
use Spatie\LaravelData\Data;

/** Tenant configuration reserved for future Seo settings. */
class SeoConfigData extends Data
{
    use MakesFromTenantConfig;

<<<<<<< HEAD
    public bool $enabled = true;
=======
    public string $site_title = '';

    public string $site_description = '';

    public bool $indexable = true;
>>>>>>> 4760ea75f63406ab21713e82fab7102dd398d091
}
