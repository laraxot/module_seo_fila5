<?php

declare(strict_types=1);

namespace Modules\Seo\Filament\Pages;

use Modules\Xot\Filament\Pages\BaseSettingPage;

use Filament\Forms\Components\Toggle;
use Modules\Seo\Datas\SeoConfigData;

/**
 * Impostazioni di Seo (`config/{tenant}/seo.php`), solo super-admin.
 *
 * Form configurato con i campi esposti da SeoConfigData.
 *
 * @see SeoConfigData
 */
class SettingPage extends BaseSettingPage
{
    /**
     * @return array<string, Toggle>
     */
    protected function getFormSchema(): array
    {
        return [
            'enabled' => Toggle::make('enabled')->default(true)->required(),
        ];
    }
}
