<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\RepositoryInterface\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;   //Dependency Injection: Giảm thiểu sự phụ thuộc ( SOLID )
    }

    public function create()
    {
        return view('admin.category.add-category');
    }

    public function store(Request $request)
    {
        $this->categoryRepository->create($request->toArray());

        return view('admin.category.add-category')->with('msg', 'Created');
    }

    public function index()
    {
        $categories = $this->categoryRepository->getAll();

        return view('admin.category.list-category', [
            'categories' => $categories
        ]);
    }

    public function destroy(int $id)
    {
        $this->categoryRepository->delete($id);

        return redirect()->back();
    }

    public function show(int $id)
    {
        $category = $this->categoryRepository->find($id);

        return view('admin.category.show', [
            'category' => $category
        ]);
    }

    public function update(int $id, Request $request)
    {
        $this->categoryRepository->update($id, $request->toArray());

        return redirect()->route('list-category');
    }

}
