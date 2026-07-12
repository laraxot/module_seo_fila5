<?php

declare(strict_types=1);

namespace Modules\Seo\Tests;

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\ServiceProvider;
use Modules\Seo\Providers\SeoServiceProvider;
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

    protected function setUp(): void
    {
        parent::setUp();

        config(['xra.pub_theme' => 'Meetup']);
        config(['xra.main_module' => 'Seo']);
    }
}
