<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\RepositoryInterface\CartRepositoryInterface;
use App\Repositories\Contracts\RepositoryInterface\hanghoaRepositoryInterface;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    protected $hanghoaRepository;
    protected $cartRepository;


    public function __construct(
        hanghoaRepositoryInterface $hanghoaRepositoryInterface,
        CartRepositoryInterface $cartRepositoryInterface)
    {
        $this->hanghoaRepository = $hanghoaRepositoryInterface;   //Dependency Injection: Giảm thiểu sự phụ thuộc ( SOLID )
        $this->cartRepository = $cartRepositoryInterface;
    }

    public function show()
    {
        $hanghoas = $this->hanghoaRepository->getAll();
        $carts = $this->cartRepository->getAll();


        return view('index.index', [

            'hanghoas' => $hanghoas,
            'carts' => $carts

        ]);
    }

}
