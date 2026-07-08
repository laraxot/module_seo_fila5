<?php

declare(strict_types=1);

namespace Modules\Seo\Providers;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Seo\Adapters\MetatagFacadeAdapter;
use Modules\Seo\Adapters\MetatagState;
=======
use Modules\Seo\Adapters\MetatagManager;
>>>>>>> cf01f0b (.)
=======
use Modules\Seo\Services\MetatagService;
>>>>>>> 7ec200b (.)
=======
use Modules\Seo\Services\MetatagService;
>>>>>>> d20252d (.)
=======
use Modules\Seo\Services\MetatagService;
>>>>>>> dbf8b8d (.)
=======
use Modules\Seo\Services\MetatagService;
>>>>>>> 77e0353 (.)
use Modules\Xot\Providers\XotBaseServiceProvider;

class SeoServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Seo';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d20252d (.)
=======
>>>>>>> dbf8b8d (.)
=======
>>>>>>> 77e0353 (.)
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7ec200b (.)
=======
>>>>>>> d20252d (.)
=======
>>>>>>> dbf8b8d (.)
=======
>>>>>>> 77e0353 (.)
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        parent::register();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->app->singleton(MetatagState::class);
        $this->app->singleton(MetatagFacadeAdapter::class);
=======
        $this->app->singleton(MetatagManager::class, function () {
            return new MetatagManager();
        });
>>>>>>> cf01f0b (.)
=======
        $this->app->singleton(MetatagService::class, function ($app) {
            return new MetatagService;
        });
>>>>>>> 7ec200b (.)
=======
        $this->app->singleton(MetatagService::class, function ($app) {
            return new MetatagService;
        });
>>>>>>> d20252d (.)
=======
        $this->app->singleton(MetatagService::class, function ($app) {
            return new MetatagService;
        });
>>>>>>> dbf8b8d (.)
=======
        $this->app->singleton(MetatagService::class, function ($app) {
            return new MetatagService;
        });
>>>>>>> 77e0353 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            MetatagFacadeAdapter::class,
            MetatagState::class,
=======
            MetatagManager::class,
>>>>>>> cf01f0b (.)
=======
            MetatagService::class,
>>>>>>> 7ec200b (.)
=======
            MetatagService::class,
>>>>>>> d20252d (.)
=======
            MetatagService::class,
>>>>>>> dbf8b8d (.)
=======
            MetatagService::class,
>>>>>>> 77e0353 (.)
        ];
    }
}
