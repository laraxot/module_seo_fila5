<?php

declare(strict_types=1);

namespace Modules\Seo\Adapters;

use Modules\Seo\Contracts\MetatagDataContract;
<<<<<<< .merge_file_xc7473
use Modules\Seo\Datas\MetatagData;
=======
use Modules\Seo\Data\MetatagData;
>>>>>>> .merge_file_nBkZpT

/**
 * Request-scoped accumulator per i metatag SEO (backing del facade Metatag).
 */
final class MetatagState
{
    public MetatagDataContract $data;

    public function __construct()
    {
<<<<<<< .merge_file_xc7473
        $this->data = new MetatagData();
=======
        $this->data = new MetatagData;
>>>>>>> .merge_file_nBkZpT
    }
}
