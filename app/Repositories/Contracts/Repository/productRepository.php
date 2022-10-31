<?php

namespace App\Repositories\Contracts\Repository;

use App\Models\product;
use App\Repositories\Contracts\RepositoryInterface\productRepositoryInterface;
use App\Repositories\BaseRepository;

class productRepository extends BaseRepository implements productRepositoryInterface
{
    public function getModel()
    {
        return product::class;
    }

}
