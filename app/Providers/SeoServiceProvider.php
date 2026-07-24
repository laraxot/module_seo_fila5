<?php

declare(strict_types=1);

namespace Modules\Seo\Providers;

<<<<<<< HEAD
use Modules\Seo\Adapters\MetatagFacadeAdapter;
use Modules\Seo\Adapters\MetatagState;
=======
use Modules\Seo\Adapters\MetatagManager;
>>>>>>> cf01f0b (.)
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
        $this->app->singleton(MetatagState::class);
        $this->app->singleton(MetatagFacadeAdapter::class);
=======
        $this->app->singleton(MetatagManager::class, function () {
            return new MetatagManager();
        });
>>>>>>> cf01f0b (.)
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
            MetatagFacadeAdapter::class,
            MetatagState::class,
=======
            MetatagManager::class,
>>>>>>> cf01f0b (.)
        ];
    }
}
