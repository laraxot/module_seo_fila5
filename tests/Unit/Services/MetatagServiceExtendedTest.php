<?php

declare(strict_types=1);

namespace Modules\Seo\Tests\Unit\Services;

use Modules\Seo\Adapters\MetatagManager;
<<<<<<< .merge_file_Y1MPxL
use Modules\Seo\Tests\TestCase;
=======
>>>>>>> .merge_file_69J7C5
use PHPUnit\Framework\Assert;
uses(\Modules\Seo\Tests\TestCase::class);

uses(TestCase::class);

it('sets all optional seo fields through service', function (): void {
<<<<<<< .merge_file_Y1MPxL
    $service = new MetatagManager();
=======
    $service = new MetatagManager;
>>>>>>> .merge_file_69J7C5
    $published = now()->subDay();
    $modified = now();

    $service->setImage('https://example.test/image.png');
    $service->setLocale('it');
    $service->setType('article');
    $service->setSiteName('LaravelPizza');
    $service->setUrl('https://example.test/post');
    $service->setAuthor('Mario');
    $service->setPublishedTime($published);
    $service->setModifiedTime($modified);

    $meta = $service->get();

    Assert::assertSame('https://example.test/image.png', $meta->getImage());
    Assert::assertSame('it', $meta->getLocale());
    Assert::assertSame('article', $meta->getType());
    Assert::assertSame('LaravelPizza', $meta->getSiteName());
    Assert::assertSame('https://example.test/post', $meta->getUrl());
    Assert::assertSame('Mario', $meta->getAuthor());
    Assert::assertSame($published->format('c'), $meta->getPublishedTime()?->format('c'));
    Assert::assertSame($modified->format('c'), $meta->getModifiedTime()?->format('c'));
});
