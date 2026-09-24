<?php

declare(strict_types=1);

<<<<<<< HEAD
/*
 * Bootstrap Pest — modulo Seo.
 * Ogni file test dichiara uses(\Modules\Seo\Tests\TestCase::class) se serve il container.
 * Vietato pest()->extend() e uses()->group() qui (PHPStan method.internalClass).
 */
=======
use Modules\Seo\Tests\TestCase;

uses(TestCase::class)->in('Feature', 'Unit');
uses()->group('seo');
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
