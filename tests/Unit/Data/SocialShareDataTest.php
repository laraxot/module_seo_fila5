<?php

declare(strict_types=1);

namespace Modules\Seo\Tests\Unit\Data;

use Modules\Seo\Data\SocialShareData;
<<<<<<< .merge_file_aWBZB5
use Tests\TestCase;

uses(TestCase::class);
=======
use PHPUnit\Framework\Assert;
>>>>>>> .merge_file_ek137U

it('creates instance with required url', function (): void {
    $data = new SocialShareData(url: 'https://laravelpizza.com');

<<<<<<< .merge_file_aWBZB5
    expect($data->url)->toBe('https://laravelpizza.com')
        ->and($data->title)->toBeNull()
        ->and($data->text)->toBeNull()
        ->and($data->image)->toBeNull()
        ->and($data->hashtags)->toBeNull()
        ->and($data->via)->toBeNull();
=======
    Assert::assertSame('https://laravelpizza.com', $data->url);
    Assert::assertNull($data->title);
    Assert::assertNull($data->text);
    Assert::assertNull($data->image);
    Assert::assertNull($data->hashtags);
    Assert::assertNull($data->via);
>>>>>>> .merge_file_ek137U
});

it('has default platforms list', function (): void {
    $data = new SocialShareData(url: 'https://laravelpizza.com');

<<<<<<< .merge_file_aWBZB5
    expect($data->platforms)->toBe(['facebook', 'twitter', 'linkedin', 'whatsapp', 'telegram', 'copy']);
=======
    Assert::assertSame(
        ['facebook', 'twitter', 'linkedin', 'whatsapp', 'telegram', 'copy'],
        $data->platforms,
    );
>>>>>>> .merge_file_ek137U
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

<<<<<<< .merge_file_aWBZB5
=======
    Assert::assertSame('https://laravelpizza.com/events/laravel-pizza-1', $data->url);
    Assert::assertSame('Laravel Pizza Meetup', $data->title);
    Assert::assertSame('Join us for pizza and Laravel!', $data->text);
    Assert::assertSame('https://laravelpizza.com/images/og.png', $data->image);
    Assert::assertSame('laravel,php,meetup', $data->hashtags);
    Assert::assertSame('laravelpizza', $data->via);
    Assert::assertSame(['twitter', 'linkedin'], $data->platforms);
>>>>>>> .merge_file_ek137U
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

<<<<<<< .merge_file_aWBZB5
    expect($data->platforms)->toBe(['twitter'])
        ->and($data->platforms)->toHaveCount(1);
=======
    Assert::assertSame(['twitter'], $data->platforms);
    Assert::assertCount(1, $data->platforms);
>>>>>>> .merge_file_ek137U
});

it('serializes to array via Spatie Data', function (): void {
    $data = new SocialShareData(
        url: 'https://laravelpizza.com',
        title: 'Laravel Pizza',
    );

    $array = $data->toArray();

<<<<<<< .merge_file_aWBZB5
=======
    Assert::assertArrayHasKey('url', $array);
    Assert::assertSame('https://laravelpizza.com', $array['url']);
    Assert::assertArrayHasKey('title', $array);
    Assert::assertSame('Laravel Pizza', $array['title']);
>>>>>>> .merge_file_ek137U
    expect($array)->toHaveKey('url', 'https://laravelpizza.com')
        ->and($array)->toHaveKey('title', 'Laravel Pizza');
});
