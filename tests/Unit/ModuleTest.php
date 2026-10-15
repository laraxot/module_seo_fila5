<?php
namespace Modules\Seo\Tests\Unit;

use Modules\Seo\Tests\TestCase;
use Modules\Seo\Models\Seo;

it('has main model class', function () {
    expect(class_exists(Seo::class))->toBeTrue();
});
