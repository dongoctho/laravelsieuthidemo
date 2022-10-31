<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\RepositoryInterface\hanghoaRepositoryInterface;
use App\Repositories\Contracts\RepositoryInterface\CategoryRepositoryInterface;
use App\Repositories\Contracts\RepositoryInterface\ProducerRepositoryInterface;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\BinaryOp\Equal;

class hanghoaController extends Controller
{
    protected $hanghoaRepository;
    protected $categoryRepository;
    protected $producerRepository;



    public function __construct(hanghoaRepositoryInterface $hanghoaRepositoryInterface,CategoryRepositoryInterface $categoryRepositoryInterface
    ,ProducerRepositoryInterface $producerRepositoryInterface)
    {
        $this->hanghoaRepository = $hanghoaRepositoryInterface;
        $this->categoryRepository = $categoryRepositoryInterface;
        $this->producerRepository = $producerRepositoryInterface;

    }


    public function create()
    {
        $categories = $this->categoryRepository->getAll();
        $producers = $this->producerRepository->getAll();

        return view('admin.hanghoa.add-hanghoa', [
            'categories' => $categories,
            'producers' => $producers
        ]);

    }

    public function store(Request $request)
    {

        if($request -> has('file_upload')){
            $file = $request->file_upload;
            $ext = $request->file_upload->extension();
            $file_name = time().'-'.'hanghoa.'.$ext;
            $file->move(public_path('uploads'), $file_name);
        }
        $data = [
            'code' => $request->code,
            'name' => $request->name,
            'description' => $request->description,
            'insurance' => $request->insurance,
            'amount' => $request->amount,
            'producer_id' => $request->producer_id,
            'unit' => $request->unit,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'file_upload' => $file_name
        ];

        $this->hanghoaRepository->create($data);

        return redirect()->route('hanghoa-create')->with('msg', 'Thành Công');
    }

    public function index(){
        $hanghoas = $this->hanghoaRepository->getAll();


        return view('admin.hanghoa.list-hanghoa', [
            'hanghoas' => $hanghoas
        ]);
    }

    public function destroy(int $id)
    {
        $this->hanghoaRepository->delete($id);
        return redirect()->back();
    }

    public function show(int $id)
    {
        $categories = $this->categoryRepository->getAll();
        $hanghoa = $this->hanghoaRepository->find($id);
        $producers = $this->producerRepository->getAll();

        return view('admin.hanghoa.show-hanghoa', [
            'hanghoa' => $hanghoa,
            'categories' => $categories,
            'producers' => $producers
        ]);
    }

    public function update(int $id, Request $request)
    {
        $hanghoas = $this->hanghoaRepository->getAll($id);

        if($request -> has('file_upload')){
            $file = $request->file_upload;
            $ext = $request->file_upload->extension();
            $file_name = time().'-'.'hanghoa.'.$ext;
            $file->move(public_path('uploads'), $file_name);
        }


        $data = [
            'code' => $request->code,
            'name' => $request->name,
            'description' => $request->description,
            'insurance' => $request->insurance,
            'amount' => $request->amount,
            'producer_id' => $request->producer_id,
            'unit' => $request->unit,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'file_upload' => $file_name
        ];


        $this->hanghoaRepository->update($id,$data);


        return redirect()->route("hanghoa-list")->with('msg', 'Thành Công');
    }

}
