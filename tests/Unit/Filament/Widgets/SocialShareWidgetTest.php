<?php

declare(strict_types=1);

namespace Modules\Seo\Tests\Unit\Filament\Widgets;

use Modules\Seo\Filament\Widgets\SocialShareWidget;
<<<<<<< HEAD
use PHPUnit\Framework\Assert;
uses(\Modules\Seo\Tests\TestCase::class);

it('builds social links and exposes platforms in widget view data', function (): void {
    $widget = new class extends SocialShareWidget
    {
        /** @return array<string, mixed> */
=======
use Tests\TestCase;

uses(TestCase::class);

it('builds social links and exposes platforms in widget view data', function (): void {
    $widget = new class extends SocialShareWidget {
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
        public function exposeViewData(): array
        {
            return $this->getViewData();
        }
    };

    $widget->data = [
        'url' => 'https://example.test/page',
        'title' => 'Share Me',
    ];

    $viewData = $widget->exposeViewData();

<<<<<<< HEAD
    Assert::assertArrayHasKey('links', $viewData);
    Assert::assertArrayHasKey('platforms', $viewData);
    Assert::assertArrayHasKey('data', $viewData);

    /** @var array<string, string> $links */
    $links = $viewData['links'];
    foreach (['facebook', 'twitter', 'linkedin', 'whatsapp', 'telegram', 'copy'] as $key) {
        Assert::assertArrayHasKey($key, $links);
    }
    Assert::assertSame('https://example.test/page', $links['copy']);

    /** @var list<string> $platforms */
    $platforms = $viewData['platforms'];
    Assert::assertContains('facebook', $platforms);
=======
    expect($viewData)->toHaveKeys(['links', 'platforms', 'data'])
        ->and($viewData['links'])->toHaveKeys(['facebook', 'twitter', 'linkedin', 'whatsapp', 'telegram', 'copy'])
        ->and($viewData['links']['copy'])->toBe('https://example.test/page')
        ->and($viewData['platforms'])->toContain('facebook');
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
});

it('returns empty form schema', function (): void {
    $widget = new SocialShareWidget;

<<<<<<< HEAD
    Assert::assertSame([], $widget->getFormSchema());
=======
    expect($widget->getFormSchema())->toBe([]);
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
});
