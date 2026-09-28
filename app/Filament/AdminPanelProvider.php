<?php

declare(strict_types=1);

namespace Modules\Seo\Filament;

use Filament\Panel;
use Modules\Xot\Filament\XotBasePanelProvider;
use Filament\Support\Colors\Color;

class AdminPanelProvider extends XotBasePanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('Seo_admin')
            ->path('Seo/admin')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: __DIR__.'/Resources', for: 'Modules\\Seo\\Filament\\Resources')
            ->discoverPages(in: __DIR__.'/Pages', for: 'Modules\\Seo\\Filament\\Pages')
            ->discoverWidgets(in: __DIR__.'/Widgets', for: 'Modules\\Seo\\Filament\\Widgets')
            ->discoverClusters(in: __DIR__.'/Clusters', for: 'Modules\\Seo\\Filament\\Clusters');
    }
}
