<?php

declare(strict_types=1);

namespace Modules\Seo\Tests\Feature;

<<<<<<< HEAD
use Modules\Seo\Services\MetatagService;

it('can set title', function () {
    $service = new MetatagService;
=======
use Modules\Seo\Adapters\MetatagFacadeAdapter;
use Tests\TestCase;

uses(TestCase::class);

it('can set title', function () {
    $service = app(MetatagFacadeAdapter::class);
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
    $service->setTitle('Test Title');
    expect($service->get()->getTitle())->toBe('Test Title');
});

it('can set description', function () {
<<<<<<< HEAD
    $service = new MetatagService;
=======
    $service = app(MetatagFacadeAdapter::class);
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
    $service->setDescription('Test Description');
    expect($service->get()->getDescription())->toBe('Test Description');
});

it('can set keywords', function () {
<<<<<<< HEAD
    $service = new MetatagService;
=======
    $service = app(MetatagFacadeAdapter::class);
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
    $service->setKeywords('seo, test, laravel');
    expect($service->get()->getKeywords())->toBe('seo, test, laravel');
});

it('can set robots', function () {
<<<<<<< HEAD
    $service = new MetatagService;
=======
    $service = app(MetatagFacadeAdapter::class);
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
    $service->setRobots('index, follow');
    expect($service->get()->getRobots())->toBe('index, follow');
});

it('can set canonical url', function () {
<<<<<<< HEAD
    $service = new MetatagService;
=======
    $service = app(MetatagFacadeAdapter::class);
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
    $service->setCanonical('https://example.com');
    expect($service->get()->getCanonical())->toBe('https://example.com');
});

it('can set colors', function () {
<<<<<<< HEAD
    $service = new MetatagService;
=======
    $service = app(MetatagFacadeAdapter::class);
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
    $colors = ['primary' => '#000000', 'secondary' => '#ffffff'];
    $service->setColors($colors);
    expect($service->get()->getColors())->toBe($colors);
});
