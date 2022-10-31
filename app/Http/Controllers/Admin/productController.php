<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\RepositoryInterface\productRepositoryInterface;
use Illuminate\Http\Request;


class productController extends Controller
{
    protected $productRepository;

    public function __construct(productRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;   //Dependency Injection: Giảm thiểu sự phụ thuộc ( SOLID )
    }

    public function create()
    {
        return view('admin.product.add-product');
    }

    public function store(Request $request)
    {
        $this->productRepository->create($request->toArray());

        return view('admin.product.list')->with('msg', 'Created');
    }

    public function index()
    {
        $product = $this->productRepository->getAll();

        return view('admin.product.list', [
            'product' => $product
        ]);
    }

    public function destroy(int $id)
    {
        $this->productRepository->delete($id);

        return redirect()->back();
    }

    public function show(int $id)
    {
        $product = $this->productRepository->find($id);

        return view('admin.product.show', [
            'product' => $product
        ]);
    }

    public function update(int $id, Request $request)
    {
        $this->productRepository->update($id, $request->toArray());

        return redirect()->route('product-list');
    }
}
