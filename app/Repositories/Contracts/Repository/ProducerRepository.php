<?php

namespace App\Repositories\Contracts\Repository;

use App\Models\Producer;
use App\Repositories\Contracts\RepositoryInterface\ProducerRepositoryInterface;
use App\Repositories\BaseRepository;

class ProducerRepository extends BaseRepository implements ProducerRepositoryInterface
{
    public function getModel()
    {
        return Producer::class;
    }

}
