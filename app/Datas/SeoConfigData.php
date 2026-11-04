<?php

declare(strict_types=1);

namespace Modules\Seo\Datas;

use Modules\Xot\Datas\Concerns\MakesFromTenantConfig;
use Spatie\LaravelData\Data;

/** Tenant configuration reserved for future Seo settings. */
class SeoConfigData extends Data
{
    use MakesFromTenantConfig;

    public string $site_title = '';

    public string $site_description = '';

    public bool $indexable = true;
}
