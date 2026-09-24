<?php

declare(strict_types=1);

namespace Modules\Seo\Tests\Unit\Providers;
<<<<<<< HEAD
use Modules\Seo\Adapters\MetatagFacadeAdapter;
use Modules\Seo\Providers\EventServiceProvider;
use Modules\Seo\Providers\SeoServiceProvider;
use PHPUnit\Framework\Assert;
uses(\Modules\Seo\Tests\TestCase::class);

it('registers metatag adapter singleton and provides list', function (): void {
=======

use Modules\Seo\Providers\EventServiceProvider;
use Modules\Seo\Providers\SeoServiceProvider;
use Modules\Seo\Adapters\MetatagFacadeAdapter;
use Tests\TestCase;

uses(TestCase::class);

it('registers metatag service singleton and provides list', function (): void {
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
    $provider = new SeoServiceProvider(app());
    $provider->register();

    $instanceA = app(MetatagFacadeAdapter::class);
    $instanceB = app(MetatagFacadeAdapter::class);

<<<<<<< HEAD
    Assert::assertInstanceOf(MetatagFacadeAdapter::class, $instanceA);
    Assert::assertSame($instanceA, $instanceB);
    Assert::assertContains(MetatagFacadeAdapter::class, $provider->provides());
});

it('event service provider enables event discovery', function (): void {
    $reflection = new \ReflectionClass(EventServiceProvider::class);
    $property = $reflection->getProperty('shouldDiscoverEvents');
    $property->setAccessible(true);

    Assert::assertTrue($property->getValue());
=======
    expect($instanceA)->toBeInstanceOf(MetatagFacadeAdapter::class)
        ->and($instanceA)->toBe($instanceB)
        ->and($provider->provides())->toContain(MetatagFacadeAdapter::class);
});

it('event service provider enables event discovery', function (): void {
    $reflection = new ReflectionClass(EventServiceProvider::class);
    $property = $reflection->getProperty('shouldDiscoverEvents');
    $property->setAccessible(true);

    expect($property->getValue())->toBeTrue();
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
});
