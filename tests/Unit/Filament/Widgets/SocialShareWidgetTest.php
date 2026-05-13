<?php

declare(strict_types=1);

namespace Modules\Seo\Tests\Unit\Filament\Widgets;

use Modules\Seo\Filament\Widgets\SocialShareWidget;
<<<<<<< HEAD
use Modules\Seo\Tests\TestCase;
use PHPUnit\Framework\Assert;
=======
use Tests\TestCase;
>>>>>>> 7ec200b (.)

uses(TestCase::class);

it('builds social links and exposes platforms in widget view data', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
=======
    /** @var TestCase $this */
>>>>>>> cf01f0b (.)
    $widget = new class() extends SocialShareWidget
    {
        /** @return array<string, mixed> */
=======
    $widget = new class extends SocialShareWidget
    {
>>>>>>> 7ec200b (.)
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
});

it('returns empty form schema', function (): void {
    $widget = new SocialShareWidget();

    Assert::assertSame([], $widget->getFormSchema());
=======
    expect($viewData)->toHaveKeys(['links', 'platforms', 'data'])
        ->and($viewData['links'])->toHaveKeys(['facebook', 'twitter', 'linkedin', 'whatsapp', 'telegram', 'copy'])
        ->and($viewData['links']['copy'])->toBe('https://example.test/page')
        ->and($viewData['platforms'])->toContain('facebook');
});

it('returns empty form schema', function (): void {
    $widget = new SocialShareWidget;

    expect($widget->getFormSchema())->toBe([]);
>>>>>>> 7ec200b (.)
});
