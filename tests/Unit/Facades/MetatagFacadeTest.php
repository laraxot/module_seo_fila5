<?php

declare(strict_types=1);

namespace Modules\Seo\Tests\Unit\Facades;

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

    Metatag::setTitle('Facade Title');
    Metatag::setDescription('Facade Description');

<<<<<<< HEAD
    Assert::assertSame('Facade Title', $adapter->get()->getTitle());
    Assert::assertSame('Facade Description', $adapter->get()->getDescription());
=======
    Assert::assertSame('Facade Title', $service->get()->getTitle());
    Assert::assertSame('Facade Description', $service->get()->getDescription());
>>>>>>> cf01f0b (.)
});
