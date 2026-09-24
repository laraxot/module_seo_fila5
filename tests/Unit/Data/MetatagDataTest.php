<?php

declare(strict_types=1);

namespace Modules\Seo\Tests\Unit\Data;

use Modules\Seo\Data\MetatagData;
<<<<<<< HEAD
<<<<<<< HEAD
use Tests\TestCase;

uses(TestCase::class);

it('returns sane defaults for empty data', function (): void {
    $data = new MetatagData;

    expect($data->getTitle())->toBe('')
        ->and($data->getDescription())->toBe('')
        ->and($data->getKeywords())->toBe('')
        ->and($data->getRobots())->toBe('index, follow')
        ->and($data->getCanonical())->toBeNull()
        ->and($data->getImage())->toBeNull()
        ->and($data->getType())->toBe('website');
=======
=======
>>>>>>> laraxot/dev
use PHPUnit\Framework\Assert;

it('returns sane defaults for empty data', function (): void {
    $data = new MetatagData();

    Assert::assertSame('', $data->getTitle());
    Assert::assertSame('', $data->getDescription());
    Assert::assertSame('', $data->getKeywords());
    Assert::assertSame('index, follow', $data->getRobots());
    Assert::assertNull($data->getCanonical());
    Assert::assertNull($data->getImage());
    Assert::assertSame('website', $data->getType());
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
});

it('returns typed colors and falls back for invalid colors', function (): void {
    $data = new MetatagData([
        'colors' => [
            'primary' => '#111111',
            'secondary' => '#222222',
            10 => 123,
        ],
    ]);

    $colors = $data->getColors();

<<<<<<< HEAD
<<<<<<< HEAD
    expect($colors['primary'])->toBe('#111111');
    expect($colors['secondary'])->toBe('#222222');
    expect($colors['10'] ?? '')->toBe('');

    $fallback = new MetatagData(['colors' => 'invalid']);
    expect($fallback->getColors())->toHaveKey('primary');
=======
=======
>>>>>>> laraxot/dev
    Assert::assertSame('#111111', $colors['primary']);
    Assert::assertSame('#222222', $colors['secondary']);

    $numericColor = null;
    foreach ($colors as $key => $value) {
        if ((string) $key === '10') {
            $numericColor = $value;
            break;
        }
    }
    Assert::assertSame('', $numericColor);

    $fallback = new MetatagData(['colors' => 'invalid']);
    Assert::assertArrayHasKey('primary', $fallback->getColors());
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
});

it('reads nested keys and has method works', function (): void {
    $data = new MetatagData([
        'og' => [
            'title' => 'OG Title',
        ],
    ]);

<<<<<<< HEAD
<<<<<<< HEAD
    expect($data->has('og.title'))->toBeTrue()
        ->and($data->get('og.title'))->toBe('OG Title')
        ->and($data->get('og.missing', 'default'))->toBe('default');
=======
    Assert::assertTrue($data->has('og.title'));
    Assert::assertSame('OG Title', $data->get('og.title'));
    Assert::assertSame('default', $data->get('og.missing', 'default'));
>>>>>>> laraxot/dev
=======
    Assert::assertTrue($data->has('og.title'));
    Assert::assertSame('OG Title', $data->get('og.title'));
    Assert::assertSame('default', $data->get('og.missing', 'default'));
>>>>>>> laraxot/dev
});

it('supports livewire serialization cycle', function (): void {
    $original = [
        'title' => 'Serializable',
        'locale' => 'it',
    ];

    $data = new MetatagData($original);
    $livewire = $data->toLivewire();
    $restored = MetatagData::fromLivewire($livewire);

<<<<<<< HEAD
<<<<<<< HEAD
    expect($restored->toArray())->toBe($original);
=======
    Assert::assertSame($original, $restored->toArray());
>>>>>>> laraxot/dev
=======
    Assert::assertSame($original, $restored->toArray());
>>>>>>> laraxot/dev
});

it('handles non array livewire payload and url fallback', function (): void {
    $restored = MetatagData::fromLivewire('invalid');
<<<<<<< HEAD
<<<<<<< HEAD
    expect($restored->toArray())->toBe([]);
=======
=======
>>>>>>> laraxot/dev
    Assert::assertSame([], $restored->toArray());

    $data = new MetatagData(['url' => 123]);
    $url = $data->getUrl();
    Assert::assertIsString($url);
});

it('returns explicit locale from data payload', function (): void {
    $data = new MetatagData(['locale' => 'it']);

    Assert::assertSame('it', $data->getLocale());
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev

    $data = new MetatagData(['url' => 123]);
    $url = $data->getUrl();
    expect($url)->toBeString();
});

it('falls back to en when app locale is not a string', function (): void {
    config(['app.locale' => ['it']]);

    $data = new MetatagData([]);

<<<<<<< HEAD
<<<<<<< HEAD
    expect($data->getLocale())->toBe('en');
=======
    Assert::assertSame('en', $data->getLocale());
>>>>>>> laraxot/dev
=======
    Assert::assertSame('en', $data->getLocale());
>>>>>>> laraxot/dev
});
