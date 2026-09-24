<?php

declare(strict_types=1);

namespace Modules\Seo\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array<string, array<int, string>>
     */
    protected $listen = [];

    /**
     * Indicates if events should be discovered.
<<<<<<< HEAD
=======
     *
     * @var bool
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
     */
    protected static $shouldDiscoverEvents = true;

    /**
     * Configure the proper event listeners for email verification.
     */
    protected function configureEmailVerification(): void {}
}
