<?php

declare(strict_types=1);

namespace Modules\Seo\Adapters;

use Modules\Seo\Contracts\MetatagDataContract;
<<<<<<< HEAD
use Modules\Seo\Data\MetatagData;
=======
<<<<<<< HEAD
<<<<<<< .merge_file_xc7473
use Modules\Seo\Datas\MetatagData;
=======
use Modules\Seo\Data\MetatagData;
>>>>>>> .merge_file_nBkZpT
=======
use Modules\Seo\Data\MetatagData;
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
>>>>>>> 19508be (chore(release): 1.0.0-dev.3 [skip ci])

/**
 * Request-scoped accumulator per i metatag SEO (backing del facade Metatag).
 */
final class MetatagState
{
    public MetatagDataContract $data;

    public function __construct()
    {
<<<<<<< HEAD
        $this->data = new MetatagData;
=======
<<<<<<< HEAD
<<<<<<< .merge_file_xc7473
        $this->data = new MetatagData();
=======
        $this->data = new MetatagData;
>>>>>>> .merge_file_nBkZpT
=======
        $this->data = new MetatagData;
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
>>>>>>> 19508be (chore(release): 1.0.0-dev.3 [skip ci])
    }
}
