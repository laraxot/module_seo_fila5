<?php

declare(strict_types=1);

namespace Modules\Seo\Tests;

<<<<<<< HEAD
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\DB;
use Modules\User\Models\User;
=======
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\ServiceProvider;
use Modules\Seo\Providers\SeoServiceProvider;
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
use Modules\Xot\Tests\XotBaseTestCase;

/**
 * Base test case for Seo module.
 */
abstract class TestCase extends XotBaseTestCase
{
    use DatabaseTransactions;

    /** @var list<string> */
    protected $connectionsToTransact = [
        'sqlite',
<<<<<<< HEAD
        'user',
    ];

=======
    ];

    /**
     * @return array<int, class-string<ServiceProvider>>
     */
    protected function getPackageProviders(mixed $app): array
    {
        if (! $app instanceof Application) {
            throw new \InvalidArgumentException('Expected Illuminate\Foundation\Application.');
        }

        return [
            ...parent::getPackageProviders($app),
            SeoServiceProvider::class,
        ];
    }

>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< HEAD
        $database = database_path('fixcity_data.sqlite');

        /** @var array<string, array<string, mixed>> $connections */
        $connections = config('database.connections', []);

        foreach (array_keys($connections) as $connection) {
            $driver = config("database.connections.{$connection}.driver");

            if ($driver === 'sqlite') {
                $this->app['config']->set("database.connections.{$connection}.database", $database);
                DB::purge($connection);

                continue;
            }

            if ($driver === 'mysql') {
                $this->app['config']->set("database.connections.{$connection}.driver", 'sqlite');
                $this->app['config']->set("database.connections.{$connection}.database", $database);
                $this->app['config']->set("database.connections.{$connection}.prefix", '');
                DB::purge($connection);
            }
        }

        config(['auth.providers.users.model' => User::class]);
=======
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
        config(['xra.pub_theme' => 'Meetup']);
        config(['xra.main_module' => 'Seo']);
    }
}
