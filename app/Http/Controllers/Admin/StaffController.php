<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\RepositoryInterface\StaffRepositoryInterface;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\BinaryOp\Equal;

class StaffController extends Controller
{
    protected $StaffRepository;

    public function __construct(StaffRepositoryInterface $StaffRepositoryInterface)
    {
        $this->StaffRepository = $StaffRepositoryInterface;

    }


    public function create()
    {
        return view('admin.staff.add-staff');
    }

    public function store(Request $request)
    {

        if($request -> has('file_upload')){
            $file = $request->file_upload;
            $ext = $request->file_upload->extension();
            $file_name = time().'-'.'staff.'.$ext;
            $file->move(public_path('uploads'), $file_name);
        }
        $data = [
            'code' => $request->code,
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'file_upload' => $file_name
        ];

        $this->StaffRepository->create($data);

        return redirect()->route('staff-create')->with('msg', 'Thành Công');
    }

    public function index(){
        $staffs = $this->StaffRepository->getAll();


        return view('admin.staff.list-staff', [
            'staffs' => $staffs
        ]);
    }

    public function destroy(int $id)
    {
        $this->StaffRepository->delete($id);
        return redirect()->back();
    }

    public function show(int $id)
    {
        $staff = $this->StaffRepository->find($id);

        return view('admin.staff.show-staff', [
            'staff' => $staff
        ]);
    }

    public function update(int $id, Request $request)
    {
        $staffs = $this->StaffRepository->getAll($id);

        if($request -> has('file_upload')){
            $file = $request->file_upload;
            $ext = $request->file_upload->extension();
            $file_name = time().'-'.'staff.'.$ext;
            $file->move(public_path('uploads'), $file_name);
        }


        $data = [
            'code' => $request->code,
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'file_upload' => $file_name
        ];


        $this->StaffRepository->update($id,$data);


        return redirect()->route("staff-list")->with('msg', 'Thành Công');
    }

}
