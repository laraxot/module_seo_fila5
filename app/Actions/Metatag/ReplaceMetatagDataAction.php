<?php

declare(strict_types=1);

namespace Modules\Seo\Actions\Metatag;

use Modules\Seo\Adapters\MetatagState;
<<<<<<< HEAD
use Modules\Seo\Data\MetatagData;
=======
<<<<<<< HEAD
<<<<<<< .merge_file_aeFb4l
use Modules\Seo\Datas\MetatagData;
=======
use Modules\Seo\Data\MetatagData;
>>>>>>> .merge_file_T0r7CY
=======
use Modules\Seo\Data\MetatagData;
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
>>>>>>> 19508be (chore(release): 1.0.0-dev.3 [skip ci])
use Spatie\QueueableAction\QueueableAction;

final class ReplaceMetatagDataAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
     * @param array<string, mixed> $data
=======
<<<<<<< HEAD
<<<<<<< .merge_file_aeFb4l
     * @param  array<string, mixed>  $data
=======
     * @param array<string, mixed> $data
>>>>>>> .merge_file_T0r7CY
=======
     * @param array<string, mixed> $data
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
>>>>>>> 19508be (chore(release): 1.0.0-dev.3 [skip ci])
     */
    public function execute(array $data): void
    {
        app(MetatagState::class)->data = new MetatagData($data);
    }
}
