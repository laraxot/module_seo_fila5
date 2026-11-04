<?php

declare(strict_types=1);

namespace Modules\Seo\Filament\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Modules\Xot\Filament\Pages\BaseSettingPage;

/** Tenant settings entry point for Seo; no mutable settings are exposed yet. */
class SettingPage extends BaseSettingPage
{
    /**
     * @return array<string, TextInput|Toggle>
     */
    protected function getFormSchema(): array
    {
        return [
            'site_title' => TextInput::make('site_title')->maxLength(255),
            'site_description' => TextInput::make('site_description')->maxLength(500),
            'indexable' => Toggle::make('indexable')->default(true),
        ];
    }
}
