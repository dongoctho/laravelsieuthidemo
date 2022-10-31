<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\RepositoryInterface\OrderRepositoryInterface;
use App\Repositories\Contracts\RepositoryInterface\hanghoaRepositoryInterface;
use App\Repositories\Contracts\RepositoryInterface\StaffRepositoryInterface;
use App\Repositories\Contracts\RepositoryInterface\ClientRepositoryInterface;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\BinaryOp\Equal;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

class OrderController extends Controller
{
    protected $OrderRepository;
    protected $StaffRepository;
    protected $ClientRepository;
    protected $hanghoaRepository;




    public function __construct(OrderRepositoryInterface $orderRepositoryInterface,hanghoaRepositoryInterface $hanghoaRepositoryInterface,StaffRepositoryInterface $staffRepositoryInterface
    ,ClientRepositoryInterface $clientRepositoryInterface)
    {
        $this->hanghoaRepository = $hanghoaRepositoryInterface;
        $this->OrderRepository = $orderRepositoryInterface;
        $this->ClientRepository = $clientRepositoryInterface;
        $this->StaffRepository = $staffRepositoryInterface;

    }


    public function add(int $id)
    {
        $hanghoas = $this->hanghoaRepository->getAll();
        $hanghoashow = $this->hanghoaRepository->find($id);
        return view('admin.order.order', [
            'hanghoas' => $hanghoas,
            'hanghoashow' => $hanghoashow
        ]);
    }

    public function store(int $id, Request $request)
    {
        $data = [
            'name' => $request->name,
            'surname' => $request->surname,
            'country' => $request->country,
            'city' => $request->city,
            'district' => $request->district,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'description' => $request->description,
            'product_name' => $request->product_name,
            'price' => $request->price,
            'voucher' => $request->voucher,
            'amount' => $request->amount,
            'payment' => $request->payment,
            'total' => $request->amount*$request->price
        ];
        $this->OrderRepository->create($data);

        return redirect()->route('order-add', $id)->with('msg', 'Thành Công');
    }

    public function index(){

        $orders = $this->OrderRepository->getAll();

        return view('admin.order.list-order', [
            'orders' => $orders
        ]);
    }

    public function destroy(int $id)
    {
        $this->OrderRepository->delete($id);
        return redirect()->back();
    }

    public function show(int $id)
    {

        $hanghoas = $this->hanghoaRepository->getAll();
        $hanghoashow = $this->hanghoaRepository->find($id);
        return view('admin.order.order', [
            'hanghoas' => $hanghoas,
            'hanghoashow' => $hanghoashow
        ]);
    }

    public function update(int $id, Request $request)
    {

        $data = [
            'client_id' => $request->client_id,
            'address' => $request->address,
            'product_id' => $request->product_id,
            'amount' => $request->amount,
            'price' => $request->price,
            'total' => $request->amount*$request->price,
            'payment' => $request->payment,
            'staff_id' => $request->staff_id
        ];
        $this->OrderRepository->update($id,$data);
        return redirect()->route("order-list")->with('msg', 'Thành Công');
    }

}
