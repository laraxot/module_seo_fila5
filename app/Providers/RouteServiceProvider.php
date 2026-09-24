<?php

declare(strict_types=1);

namespace Modules\Seo\Providers;

use Modules\Xot\Providers\XotBaseRouteServiceProvider;

class RouteServiceProvider extends XotBaseRouteServiceProvider
{
<<<<<<< HEAD
    public string $name = 'Seo';

=======
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
    /**
     * The module namespace to assume when generating URLs to actions.
     */
    protected string $moduleNamespace = 'Modules\Seo\Http\Controllers';
<<<<<<< HEAD
=======

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public string $name = 'Seo';
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
}
