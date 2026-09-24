<?php

declare(strict_types=1);

namespace Modules\Seo\Actions\Metatag;

use Modules\Seo\Adapters\MetatagState;
<<<<<<< HEAD
use Modules\Seo\Data\MetatagData;
=======
<<<<<<< HEAD
<<<<<<< .merge_file_TIHKA5
use Modules\Seo\Datas\MetatagData;
=======
use Modules\Seo\Data\MetatagData;
>>>>>>> .merge_file_oBqNZg
=======
use Modules\Seo\Data\MetatagData;
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
>>>>>>> 19508be (chore(release): 1.0.0-dev.3 [skip ci])
use Spatie\QueueableAction\QueueableAction;

final class MergeMetatagDataAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
     * @param array<string, mixed> $partial
=======
<<<<<<< HEAD
<<<<<<< .merge_file_TIHKA5
     * @param  array<string, mixed>  $partial
=======
     * @param array<string, mixed> $partial
>>>>>>> .merge_file_oBqNZg
=======
     * @param array<string, mixed> $partial
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
>>>>>>> 19508be (chore(release): 1.0.0-dev.3 [skip ci])
     */
    public function execute(array $partial): void
    {
        $state = app(MetatagState::class);
        $state->data = new MetatagData(array_merge($state->data->toArray(), $partial));
    }
}
