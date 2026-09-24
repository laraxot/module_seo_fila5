<?php

declare(strict_types=1);

namespace Modules\Seo\Providers;

use Modules\Seo\Adapters\MetatagFacadeAdapter;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Modules\Seo\Adapters\MetatagManager;
=======
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
>>>>>>> 19508be (chore(release): 1.0.0-dev.3 [skip ci])
use Modules\Seo\Adapters\MetatagState;
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
<<<<<<< HEAD
=======

        $this->app->singleton(MetatagManager::class, function () {
            return new MetatagManager();
=======
        $this->app->singleton(MetatagState::class, function () {
            return new MetatagState();
        });

        $this->app->singleton(MetatagFacadeAdapter::class, function () {
            return new MetatagFacadeAdapter();
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
        });
>>>>>>> 19508be (chore(release): 1.0.0-dev.3 [skip ci])
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
<<<<<<< HEAD
            MetatagState::class,
<<<<<<< HEAD
=======
            MetatagManager::class,
=======
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
>>>>>>> 19508be (chore(release): 1.0.0-dev.3 [skip ci])
        ];
    }
}
