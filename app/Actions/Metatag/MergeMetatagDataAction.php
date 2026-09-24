<?php

declare(strict_types=1);

namespace Modules\Seo\Actions\Metatag;

use Modules\Seo\Adapters\MetatagState;
<<<<<<< .merge_file_TIHKA5
use Modules\Seo\Datas\MetatagData;
=======
use Modules\Seo\Data\MetatagData;
>>>>>>> .merge_file_oBqNZg
use Spatie\QueueableAction\QueueableAction;

final class MergeMetatagDataAction
{
    use QueueableAction;

    /**
<<<<<<< .merge_file_TIHKA5
     * @param  array<string, mixed>  $partial
=======
     * @param array<string, mixed> $partial
>>>>>>> .merge_file_oBqNZg
     */
    public function execute(array $partial): void
    {
        $state = app(MetatagState::class);
        $state->data = new MetatagData(array_merge($state->data->toArray(), $partial));
    }
}
