<?php

declare(strict_types=1);

namespace Modules\Seo\Actions\Metatag;

use Modules\Seo\Adapters\MetatagState;
<<<<<<< .merge_file_aeFb4l
use Modules\Seo\Datas\MetatagData;
=======
use Modules\Seo\Data\MetatagData;
>>>>>>> .merge_file_T0r7CY
use Spatie\QueueableAction\QueueableAction;

final class ReplaceMetatagDataAction
{
    use QueueableAction;

    /**
<<<<<<< .merge_file_aeFb4l
     * @param  array<string, mixed>  $data
=======
     * @param array<string, mixed> $data
>>>>>>> .merge_file_T0r7CY
     */
    public function execute(array $data): void
    {
        app(MetatagState::class)->data = new MetatagData($data);
    }
}
