<?php

declare(strict_types=1);

namespace Modules\Seo\Tests\Feature;

use Modules\Seo\Adapters\MetatagManager;
use PHPUnit\Framework\Assert;

it('can set title', function (): void {
<<<<<<< HEAD
    $service = new MetatagManager();
=======
    $service = new MetatagManager;
>>>>>>> cf01f0b (.)
    $service->setTitle('Test Title');
    Assert::assertSame('Test Title', $service->get()->getTitle());
});

it('can set description', function (): void {
<<<<<<< HEAD
    $service = new MetatagManager();
=======
    $service = new MetatagManager;
>>>>>>> cf01f0b (.)
    $service->setDescription('Test Description');
    Assert::assertSame('Test Description', $service->get()->getDescription());
});

it('can set keywords', function (): void {
<<<<<<< HEAD
    $service = new MetatagManager();
=======
    $service = new MetatagManager;
>>>>>>> cf01f0b (.)
    $service->setKeywords('seo, test, laravel');
    Assert::assertSame('seo, test, laravel', $service->get()->getKeywords());
});

it('can set robots', function (): void {
<<<<<<< HEAD
    $service = new MetatagManager();
=======
    $service = new MetatagManager;
>>>>>>> cf01f0b (.)
    $service->setRobots('index, follow');
    Assert::assertSame('index, follow', $service->get()->getRobots());
});

it('can set canonical url', function (): void {
<<<<<<< HEAD
    $service = new MetatagManager();
=======
    $service = new MetatagManager;
>>>>>>> cf01f0b (.)
    $service->setCanonical('https://example.com');
    Assert::assertSame('https://example.com', $service->get()->getCanonical());
});

it('can set colors', function (): void {
<<<<<<< HEAD
    $service = new MetatagManager();
=======
    $service = new MetatagManager;
>>>>>>> cf01f0b (.)
    $colors = ['primary' => '#000000', 'secondary' => '#ffffff'];
    $service->setColors($colors);
    Assert::assertSame($colors, $service->get()->getColors());
});
