<?php

declare(strict_types=1);

namespace Modules\Seo\Tests\Unit\Facades;

<<<<<<< HEAD
use Modules\Seo\Adapters\MetatagFacadeAdapter;
use Modules\Seo\Facades\Metatag;
use PHPUnit\Framework\Assert;
uses(\Modules\Seo\Tests\TestCase::class);

it('resolves metatag adapter through facade accessor', function (): void {
    $adapter = app(MetatagFacadeAdapter::class);
=======
use Modules\Seo\Facades\Metatag;
use Modules\Seo\Adapters\MetatagFacadeAdapter;
use Tests\TestCase;

uses(TestCase::class);

it('resolves metatag service through facade accessor', function (): void {
    $service = app(MetatagFacadeAdapter::class);
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])

    Metatag::setTitle('Facade Title');
    Metatag::setDescription('Facade Description');

<<<<<<< HEAD
    Assert::assertSame('Facade Title', $adapter->get()->getTitle());
    Assert::assertSame('Facade Description', $adapter->get()->getDescription());
});
=======
    expect($service->get()->getTitle())->toBe('Facade Title')
        ->and($service->get()->getDescription())->toBe('Facade Description');
});

>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
