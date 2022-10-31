<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\RepositoryInterface\ClientRepositoryInterface;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    protected $ClientRepository;

    public function __construct(ClientRepositoryInterface $ClientRepository)
    {
        $this->ClientRepository = $ClientRepository;   //Dependency Injection: Giảm thiểu sự phụ thuộc ( SOLID )
    }

    public function create()
    {
        return view('admin.client.add-client');
    }

    public function store(Request $request)
    {
        $this->ClientRepository->create($request->toArray());

        return view('admin.client.add-client')->with('msg', 'Created');
    }

    public function index()
    {
        $clients = $this->ClientRepository->getAll();

        return view('admin.client.list-client', [
            'clients' => $clients
        ]);
    }

    public function destroy(int $id)
    {
        $this->ClientRepository->delete($id);

        return redirect()->back();
    }

    public function show(int $id)
    {
        $client = $this->ClientRepository->find($id);

        return view('admin.client.show-client', [
            'client' => $client
        ]);
    }

    public function update(int $id, Request $request)
    {
        $this->ClientRepository->update($id, $request->toArray());

        return redirect()->route('client-list');
    }

}
