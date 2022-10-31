<?php

namespace App\Repositories\Contracts\Repository;

use App\Models\Product;
use App\Repositories\Contracts\RepositoryInterface\hanghoaRepositoryInterface;
use App\Repositories\BaseRepository;

class hanghoaRepository extends BaseRepository implements hanghoaRepositoryInterface
{
    public function getModel()
    {
        return Product::class;
    }

}
