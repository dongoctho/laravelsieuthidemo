<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\RepositoryInterface\ProducerRepositoryInterface;
use Illuminate\Http\Request;

class ProducerController extends Controller
{
    protected $ProducerRepository;

    public function __construct(ProducerRepositoryInterface $ProducerRepository)
    {
        $this->ProducerRepository = $ProducerRepository;   //Dependency Injection: Giảm thiểu sự phụ thuộc ( SOLID )
    }

    public function create()
    {
        return view('admin.producer.add-producer');
    }

    public function store(Request $request)
    {
        $this->ProducerRepository->create($request->toArray());

        return view('admin.producer.add-producer')->with('msg', 'Created');
    }

    public function index()
    {
        $producers = $this->ProducerRepository->getAll();

        return view('admin.producer.list-producer', [
            'producers' => $producers
        ]);
    }

    public function destroy(int $id)
    {
        $this->ProducerRepository->delete($id);

        return redirect()->back();
    }

    public function show(int $id)
    {
        $producer = $this->ProducerRepository->find($id);

        return view('admin.producer.show-producer', [
            'producer' => $producer
        ]);
    }

    public function update(int $id, Request $request)
    {
        $this->ProducerRepository->update($id, $request->toArray());

        return redirect()->route('producer-list');
    }

}

