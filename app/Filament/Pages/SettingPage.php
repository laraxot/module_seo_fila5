<?php

declare(strict_types=1);

namespace Modules\Seo\Filament\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
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
<<<<<<< HEAD
     * @return array<string, Toggle>
=======
     * @return array<string, TextInput|Toggle>
>>>>>>> 4760ea75f63406ab21713e82fab7102dd398d091
     */
    protected function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
            'enabled' => Toggle::make('enabled')->default(true)->required(),
=======
            'site_title' => TextInput::make('site_title')->maxLength(255),
            'site_description' => TextInput::make('site_description')->maxLength(500),
            'indexable' => Toggle::make('indexable')->default(true),
>>>>>>> 4760ea75f63406ab21713e82fab7102dd398d091
        ];
    }
}
