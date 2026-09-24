<?php

declare(strict_types=1);

namespace Modules\Seo\Tests\Unit\Services;

use Modules\Seo\Adapters\MetatagManager;
use PHPUnit\Framework\Assert;

it('sets all optional seo fields through metatag manager', function (): void {
    $manager = new MetatagManager;
    $published = now()->subDay();
    $modified = now();

    $manager->setImage('https://example.test/image.png');
    $manager->setLocale('it');
    $manager->setType('article');
    $manager->setSiteName('LaravelPizza');
    $manager->setUrl('https://example.test/post');
    $manager->setAuthor('Mario');
    $manager->setPublishedTime($published);
    $manager->setModifiedTime($modified);

    $meta = $manager->get();

    Assert::assertSame('https://example.test/image.png', $meta->getImage());
    Assert::assertSame('it', $meta->getLocale());
    Assert::assertSame('article', $meta->getType());
    Assert::assertSame('LaravelPizza', $meta->getSiteName());
    Assert::assertSame('https://example.test/post', $meta->getUrl());
    Assert::assertSame('Mario', $meta->getAuthor());

    $publishedTime = $meta->getPublishedTime();
    $modifiedTime = $meta->getModifiedTime();
    Assert::assertNotNull($publishedTime);
    Assert::assertNotNull($modifiedTime);
    Assert::assertSame($published->format('c'), $publishedTime->format('c'));
    Assert::assertSame($modified->format('c'), $modifiedTime->format('c'));
});
