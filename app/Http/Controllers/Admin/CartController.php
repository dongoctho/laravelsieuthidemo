<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\RepositoryInterface\CartRepositoryInterface;
use App\Repositories\Contracts\RepositoryInterface\hanghoaRepositoryInterface;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\BinaryOp\Equal;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

class CartController extends Controller
{
    protected $cartRepository;
    protected $hanghoaRepository;




    public function __construct(CartRepositoryInterface $cartRepositoryInterface,hanghoaRepositoryInterface $hanghoaRepositoryInterface)
    {
        $this->hanghoaRepository = $hanghoaRepositoryInterface;
        $this->cartRepository = $cartRepositoryInterface;

    }



    public function store(int $id)
    {

        $hanghoashow = $this->hanghoaRepository->find($id);
        $cart = $this->cartRepository->getAll();

            $data = [
                'name' => $hanghoashow->name,
                'price' => $hanghoashow->price,
                'amount' =>  $hanghoashow->amount,
                'total' => $hanghoashow->price*$hanghoashow->amount,
                'file_upload' => $hanghoashow->file_upload
            ];
            $this->cartRepository->create($data);


        return redirect()->route('index')->with('msg', 'Thành Công');
    }

    public function listcart(){

        $carts = $this->cartRepository->getAll();
        $hanghoas = $this->hanghoaRepository->getAll();
        return view('admin.order.cart', [
            'carts' => $carts,
            'hanghoas' => $hanghoas
        ]);
    }

}
