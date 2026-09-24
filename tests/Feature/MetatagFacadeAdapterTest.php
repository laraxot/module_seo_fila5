<?php

declare(strict_types=1);

namespace Modules\Seo\Tests\Feature;

use Modules\Seo\Adapters\MetatagFacadeAdapter;
use PHPUnit\Framework\Assert;

<<<<<<< HEAD
uses(\Modules\Seo\Tests\TestCase::class);

=======
<<<<<<< HEAD
<<<<<<< .merge_file_CLTVcK
=======
uses(\Modules\Seo\Tests\TestCase::class);

>>>>>>> .merge_file_pdCTQ1
=======
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
>>>>>>> 19508be (chore(release): 1.0.0-dev.3 [skip ci])
it('can set title', function (): void {
    $adapter = app(MetatagFacadeAdapter::class);
    $adapter->setTitle('Test Title');
    Assert::assertSame('Test Title', $adapter->get()->getTitle());
});

it('can set description', function (): void {
    $adapter = app(MetatagFacadeAdapter::class);
    $adapter->setDescription('Test Description');
    Assert::assertSame('Test Description', $adapter->get()->getDescription());
});

it('can set keywords', function (): void {
    $adapter = app(MetatagFacadeAdapter::class);
    $adapter->setKeywords('seo, test, laravel');
    Assert::assertSame('seo, test, laravel', $adapter->get()->getKeywords());
});

it('can set robots', function (): void {
    $adapter = app(MetatagFacadeAdapter::class);
    $adapter->setRobots('index, follow');
    Assert::assertSame('index, follow', $adapter->get()->getRobots());
});

it('can set canonical url', function (): void {
    $adapter = app(MetatagFacadeAdapter::class);
    $adapter->setCanonical('https://example.com');
    Assert::assertSame('https://example.com', $adapter->get()->getCanonical());
});

it('can set colors', function (): void {
    $adapter = app(MetatagFacadeAdapter::class);
    $colors = ['primary' => '#000000', 'secondary' => '#ffffff'];
    $adapter->setColors($colors);
    Assert::assertSame($colors, $adapter->get()->getColors());
});
