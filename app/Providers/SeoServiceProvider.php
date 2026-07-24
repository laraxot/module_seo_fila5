<?php

declare(strict_types=1);

namespace Modules\Seo\Providers;

<<<<<<< HEAD
use Modules\Seo\Adapters\MetatagManager;
=======
use Modules\Seo\Adapters\MetatagFacadeAdapter;
use Modules\Seo\Adapters\MetatagState;
>>>>>>> laraxot/dev
use Modules\Xot\Providers\XotBaseServiceProvider;

class SeoServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Seo';

    /**
     * Register the service provider.
     */
    public function register(): void
    {
        parent::register();

<<<<<<< HEAD
        $this->app->singleton(MetatagManager::class, function () {
            return new MetatagManager();
        });
=======
        $this->app->singleton(MetatagState::class);
        $this->app->singleton(MetatagFacadeAdapter::class);
>>>>>>> laraxot/dev
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array<string>
     */
    public function provides(): array
    {
        return [
<<<<<<< HEAD
            MetatagManager::class,
=======
            MetatagFacadeAdapter::class,
            MetatagState::class,
>>>>>>> laraxot/dev
        ];
    }
}
