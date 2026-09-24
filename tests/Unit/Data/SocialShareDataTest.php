<?php

declare(strict_types=1);

namespace Modules\Seo\Tests\Unit\Data;

use Modules\Seo\Data\SocialShareData;
<<<<<<< HEAD
use PHPUnit\Framework\Assert;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Tests\TestCase;

uses(TestCase::class);
=======
use PHPUnit\Framework\Assert;
>>>>>>> laraxot/dev
=======
use PHPUnit\Framework\Assert;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev

it('creates instance with required url', function (): void {
    $data = new SocialShareData(url: 'https://laravelpizza.com');

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
    expect($data->url)->toBe('https://laravelpizza.com')
        ->and($data->title)->toBeNull()
        ->and($data->text)->toBeNull()
        ->and($data->image)->toBeNull()
        ->and($data->hashtags)->toBeNull()
        ->and($data->via)->toBeNull();
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
    Assert::assertSame('https://laravelpizza.com', $data->url);
    Assert::assertNull($data->title);
    Assert::assertNull($data->text);
    Assert::assertNull($data->image);
    Assert::assertNull($data->hashtags);
    Assert::assertNull($data->via);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
});

it('has default platforms list', function (): void {
    $data = new SocialShareData(url: 'https://laravelpizza.com');

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
    expect($data->platforms)->toBe(['facebook', 'twitter', 'linkedin', 'whatsapp', 'telegram', 'copy']);
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
    Assert::assertSame(
        ['facebook', 'twitter', 'linkedin', 'whatsapp', 'telegram', 'copy'],
        $data->platforms,
    );
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
});

it('accepts all optional fields', function (): void {
    $data = new SocialShareData(
        url: 'https://laravelpizza.com/events/laravel-pizza-1',
        title: 'Laravel Pizza Meetup',
        text: 'Join us for pizza and Laravel!',
        image: 'https://laravelpizza.com/images/og.png',
        hashtags: 'laravel,php,meetup',
        via: 'laravelpizza',
        platforms: ['twitter', 'linkedin'],
    );

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
    Assert::assertSame('https://laravelpizza.com/events/laravel-pizza-1', $data->url);
    Assert::assertSame('Laravel Pizza Meetup', $data->title);
    Assert::assertSame('Join us for pizza and Laravel!', $data->text);
    Assert::assertSame('https://laravelpizza.com/images/og.png', $data->image);
    Assert::assertSame('laravel,php,meetup', $data->hashtags);
    Assert::assertSame('laravelpizza', $data->via);
    Assert::assertSame(['twitter', 'linkedin'], $data->platforms);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
    expect($data->url)->toBe('https://laravelpizza.com/events/laravel-pizza-1')
        ->and($data->title)->toBe('Laravel Pizza Meetup')
        ->and($data->text)->toBe('Join us for pizza and Laravel!')
        ->and($data->image)->toBe('https://laravelpizza.com/images/og.png')
        ->and($data->hashtags)->toBe('laravel,php,meetup')
        ->and($data->via)->toBe('laravelpizza')
        ->and($data->platforms)->toBe(['twitter', 'linkedin']);
});

it('can override platforms with custom list', function (): void {
    $data = new SocialShareData(
        url: 'https://laravelpizza.com',
        platforms: ['twitter'],
    );

<<<<<<< HEAD
    Assert::assertSame(['twitter'], $data->platforms);
    Assert::assertCount(1, $data->platforms);
=======
<<<<<<< HEAD
<<<<<<< HEAD
    expect($data->platforms)->toBe(['twitter'])
        ->and($data->platforms)->toHaveCount(1);
=======
    Assert::assertSame(['twitter'], $data->platforms);
    Assert::assertCount(1, $data->platforms);
>>>>>>> laraxot/dev
=======
    Assert::assertSame(['twitter'], $data->platforms);
    Assert::assertCount(1, $data->platforms);
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
});

it('serializes to array via Spatie Data', function (): void {
    $data = new SocialShareData(
        url: 'https://laravelpizza.com',
        title: 'Laravel Pizza',
    );

    $array = $data->toArray();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
    Assert::assertArrayHasKey('url', $array);
    Assert::assertSame('https://laravelpizza.com', $array['url']);
    Assert::assertArrayHasKey('title', $array);
    Assert::assertSame('Laravel Pizza', $array['title']);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
    expect($array)->toHaveKey('url', 'https://laravelpizza.com')
        ->and($array)->toHaveKey('title', 'Laravel Pizza');
});
