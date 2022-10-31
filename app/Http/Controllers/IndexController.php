<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\RepositoryInterface\hanghoaRepositoryInterface;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    protected $hanghoaRepository;

    public function __construct(hanghoaRepositoryInterface $hanghoaRepository)
    {
        $this->hanghoaRepository = $hanghoaRepository;   //Dependency Injection: Giảm thiểu sự phụ thuộc ( SOLID )
    }

    public function show()
    {
        $hanghoas = $this->hanghoaRepository->getAll();

        return view('index.index', [
            'hanghoas' => $hanghoas
        ]);
    }

}
