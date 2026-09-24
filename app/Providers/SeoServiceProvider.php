<?php

declare(strict_types=1);

namespace Modules\Seo\Providers;

use Modules\Seo\Adapters\MetatagFacadeAdapter;
<<<<<<< HEAD
use Modules\Seo\Adapters\MetatagManager;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Seo\Adapters\MetatagManager;
=======
>>>>>>> laraxot/dev
=======
use Modules\Seo\Adapters\MetatagManager;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
use Modules\Seo\Adapters\MetatagState;
use Modules\Xot\Providers\XotBaseServiceProvider;

class SeoServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Seo';

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        parent::register();

        $this->app->singleton(MetatagState::class);
        $this->app->singleton(MetatagFacadeAdapter::class);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev

        $this->app->singleton(MetatagManager::class, function () {
            return new MetatagManager();
        });
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
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
            MetatagFacadeAdapter::class,
            MetatagState::class,
<<<<<<< HEAD
            MetatagManager::class,
=======
<<<<<<< HEAD
<<<<<<< HEAD
            MetatagManager::class,
=======
>>>>>>> laraxot/dev
=======
            MetatagManager::class,
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
        ];
    }
}
