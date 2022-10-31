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
    protected $CartRepository;
    protected $hanghoaRepository;




    public function __construct(CartRepositoryInterface $cartRepositoryInterface,hanghoaRepositoryInterface $hanghoaRepositoryInterface)
    {
        $this->hanghoaRepository = $hanghoaRepositoryInterface;
        $this->OrderRepository = $cartRepositoryInterface;

    }



    public function store(int $id)
    {
        $hanghoashow = $this->hanghoaRepository->find($id);
        $data = [
            'name' => $hanghoashow->name,
            'price' => $hanghoashow->price,
            'amount' => '1',
            'total' => $hanghoashow->price
        ];

        $this->OrderRepository->create($data);
        return redirect()->route('index', $id)->with('msg', 'Thành Công');
    }

    public function index_cart(int $id){
        $hanghoas = $this->hanghoaRepository->getAll();
        $hanghoashow = $this->hanghoaRepository->find($id);

        return view('admin.order.cart', [
            'hanghoas' => $hanghoas,
            'hanghoashow' => $hanghoashow
        ]);
    }

}
