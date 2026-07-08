<?php

declare(strict_types=1);

namespace Modules\Seo\Tests\Unit\Facades;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Seo\Adapters\MetatagFacadeAdapter;
use Modules\Seo\Facades\Metatag;
use Modules\Seo\Tests\TestCase;
use PHPUnit\Framework\Assert;

uses(TestCase::class);

it('resolves metatag adapter through facade accessor', function (): void {
    $adapter = app(MetatagFacadeAdapter::class);
=======
use Modules\Seo\Facades\Metatag;
use Modules\Seo\Adapters\MetatagManager;
use PHPUnit\Framework\Assert;
uses(\Modules\Seo\Tests\TestCase::class);

it('resolves metatag service through facade accessor', function (): void {
    $service = app(MetatagManager::class);
>>>>>>> cf01f0b (.)
=======
=======
>>>>>>> d20252d (.)
=======
>>>>>>> 77e0353 (.)
use Modules\Seo\Facades\Metatag;
use Modules\Seo\Services\MetatagService;
use Tests\TestCase;

uses(TestCase::class);

it('resolves metatag service through facade accessor', function (): void {
    $service = app(MetatagService::class);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7ec200b (.)
=======
>>>>>>> d20252d (.)
=======
>>>>>>> 77e0353 (.)

    Metatag::setTitle('Facade Title');
    Metatag::setDescription('Facade Description');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    Assert::assertSame('Facade Title', $adapter->get()->getTitle());
    Assert::assertSame('Facade Description', $adapter->get()->getDescription());
=======
    Assert::assertSame('Facade Title', $service->get()->getTitle());
    Assert::assertSame('Facade Description', $service->get()->getDescription());
>>>>>>> cf01f0b (.)
=======
    expect($service->get()->getTitle())->toBe('Facade Title')
        ->and($service->get()->getDescription())->toBe('Facade Description');
>>>>>>> 7ec200b (.)
});
=======
=======
>>>>>>> 77e0353 (.)
    expect($service->get()->getTitle())->toBe('Facade Title')
        ->and($service->get()->getDescription())->toBe('Facade Description');
});

<<<<<<< HEAD
>>>>>>> d20252d (.)
=======
>>>>>>> 77e0353 (.)
