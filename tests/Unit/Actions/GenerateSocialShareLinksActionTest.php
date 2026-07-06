<?php

declare(strict_types=1);

namespace Modules\Seo\Tests\Unit\Actions;

use Modules\Seo\Actions\GenerateSocialShareLinksAction;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Seo\Datas\SocialShareData;
use Modules\Seo\Tests\TestCase;
use PHPUnit\Framework\Assert;

uses(TestCase::class);
=======
=======
>>>>>>> fc52fe0 (.)
use Modules\Seo\Data\SocialShareData;
use PHPUnit\Framework\Assert;

uses(\Modules\Seo\Tests\TestCase::class);
<<<<<<< HEAD
>>>>>>> cf01f0b (.)

it('generates social share links for all platforms', function (): void {
=======
=======
>>>>>>> d20252d (.)
=======
>>>>>>> 77e0353 (.)
use Modules\Seo\Data\SocialShareData;
use Tests\TestCase;

uses(TestCase::class);

it('generates social share links for all platforms', function () {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7ec200b (.)
=======
>>>>>>> d20252d (.)
=======
>>>>>>> 77e0353 (.)
=======

it('generates social share links for all platforms', function (): void {
>>>>>>> fc52fe0 (.)
    $data = SocialShareData::from([
        'url' => 'https://example.com/page',
        'title' => 'Test Title',
        'text' => 'Check this out',
    ]);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    $links = app(GenerateSocialShareLinksAction::class)->execute($data);
=======
    $action = new GenerateSocialShareLinksAction;
    $links = $action->execute($data);
>>>>>>> cf01f0b (.)
=======
    $action = new GenerateSocialShareLinksAction;
    $links = $action->execute($data);
>>>>>>> fc52fe0 (.)

    foreach (['facebook', 'twitter', 'linkedin', 'whatsapp', 'telegram', 'copy'] as $key) {
        Assert::assertArrayHasKey($key, $links);
    }
    Assert::assertStringContainsString(urlencode('https://example.com/page'), (string) $links['facebook']);
    Assert::assertSame('https://example.com/page', $links['copy']);
});

it('includes via and hashtags in twitter link when provided', function (): void {
<<<<<<< HEAD
=======
=======
>>>>>>> d20252d (.)
=======
>>>>>>> 77e0353 (.)
    $action = new GenerateSocialShareLinksAction;
    $links = $action->execute($data);

    expect($links)->toBeArray()
        ->toHaveKeys(['facebook', 'twitter', 'linkedin', 'whatsapp', 'telegram', 'copy'])
        ->and($links['facebook'])->toContain(urlencode('https://example.com/page'))
        ->and($links['copy'])->toBe('https://example.com/page');
});

it('includes via and hashtags in twitter link when provided', function () {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7ec200b (.)
=======
>>>>>>> d20252d (.)
=======
>>>>>>> 77e0353 (.)
=======
>>>>>>> fc52fe0 (.)
    $data = SocialShareData::from([
        'url' => 'https://example.com',
        'via' => 'myhandle',
        'hashtags' => 'laravel,php',
    ]);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    $links = app(GenerateSocialShareLinksAction::class)->execute($data);
=======
    $action = new GenerateSocialShareLinksAction;
    $links = $action->execute($data);
>>>>>>> cf01f0b (.)

    Assert::assertStringContainsString('via='.urlencode('myhandle'), (string) $links['twitter']);
    Assert::assertStringContainsString('hashtags='.urlencode('laravel,php'), (string) $links['twitter']);
=======
=======
>>>>>>> d20252d (.)
=======
>>>>>>> 77e0353 (.)
    $action = new GenerateSocialShareLinksAction;
    $links = $action->execute($data);

    expect($links['twitter'])->toContain('via='.urlencode('myhandle'))
        ->and($links['twitter'])->toContain('hashtags='.urlencode('laravel,php'));
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7ec200b (.)
=======
>>>>>>> d20252d (.)
=======
>>>>>>> 77e0353 (.)
=======
    $action = new GenerateSocialShareLinksAction;
    $links = $action->execute($data);

    Assert::assertStringContainsString('via='.urlencode('myhandle'), (string) $links['twitter']);
    Assert::assertStringContainsString('hashtags='.urlencode('laravel,php'), (string) $links['twitter']);
>>>>>>> fc52fe0 (.)
});
