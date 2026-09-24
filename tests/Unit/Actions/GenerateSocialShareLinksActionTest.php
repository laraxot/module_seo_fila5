<?php

declare(strict_types=1);

namespace Modules\Seo\Tests\Unit\Actions;

use Modules\Seo\Actions\GenerateSocialShareLinksAction;
use Modules\Seo\Data\SocialShareData;
<<<<<<< HEAD
use PHPUnit\Framework\Assert;

uses(\Modules\Seo\Tests\TestCase::class);

it('generates social share links for all platforms', function (): void {
=======
use Tests\TestCase;

uses(TestCase::class);

it('generates social share links for all platforms', function () {
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
    $data = SocialShareData::from([
        'url' => 'https://example.com/page',
        'title' => 'Test Title',
        'text' => 'Check this out',
    ]);

<<<<<<< HEAD
    $links = app(GenerateSocialShareLinksAction::class)->execute($data);

    foreach (['facebook', 'twitter', 'linkedin', 'whatsapp', 'telegram', 'copy'] as $key) {
        Assert::assertArrayHasKey($key, $links);
    }
    Assert::assertStringContainsString(urlencode('https://example.com/page'), (string) $links['facebook']);
    Assert::assertSame('https://example.com/page', $links['copy']);
});

it('includes via and hashtags in twitter link when provided', function (): void {
=======
    $action = new GenerateSocialShareLinksAction;
    $links = $action->execute($data);

    expect($links)->toBeArray()
        ->toHaveKeys(['facebook', 'twitter', 'linkedin', 'whatsapp', 'telegram', 'copy'])
        ->and($links['facebook'])->toContain(urlencode('https://example.com/page'))
        ->and($links['copy'])->toBe('https://example.com/page');
});

it('includes via and hashtags in twitter link when provided', function () {
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
    $data = SocialShareData::from([
        'url' => 'https://example.com',
        'via' => 'myhandle',
        'hashtags' => 'laravel,php',
    ]);

<<<<<<< HEAD
    $links = app(GenerateSocialShareLinksAction::class)->execute($data);

    Assert::assertStringContainsString('via='.urlencode('myhandle'), (string) $links['twitter']);
    Assert::assertStringContainsString('hashtags='.urlencode('laravel,php'), (string) $links['twitter']);
=======
    $action = new GenerateSocialShareLinksAction;
    $links = $action->execute($data);

    expect($links['twitter'])->toContain('via='.urlencode('myhandle'))
        ->and($links['twitter'])->toContain('hashtags='.urlencode('laravel,php'));
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
});
