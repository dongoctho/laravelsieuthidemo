<?php

namespace App\Repositories\Contracts\Repository;

use App\Models\Staff;
use App\Repositories\Contracts\RepositoryInterface\StaffRepositoryInterface;
use App\Repositories\BaseRepository;

class StaffRepository extends BaseRepository implements StaffRepositoryInterface
{
    public function getModel()
    {
        return Staff::class;
    }

}
