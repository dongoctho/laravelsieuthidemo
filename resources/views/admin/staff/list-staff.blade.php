
    @extends('admin.dashboard')
    @section('list-staff')

        <div class="card1">
            <div class="card-header">
              <h1 class="h1_themsp">Danh sách nhân viên</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table">
                <thead>
                <tr>
                              <th class="lids">ID</th>
                              <th class="lids">Mã nhân viên</th>
                              <th class="lids">Tên nhân viên</th>
                              <th class="lids">Địa chỉ</th>
                              <th class="lids">Số điện thoại</th>
                              <th class="lids">Email</th>
                              <th class="lids">Ngày tạo</th>
                              <th class="lids">Hình ảnh nhân viên</th>
                              <th class="lids">Sửa</th>
                              <th class="lids">Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($staffs as $staff)
                <tr>
                          <td class="lids1">{{$staff->id}}</td>
                          <td class="lids1">{{$staff->code}}</td>
                          <td class="lids1">{{$staff->name}}</td>
                          <td class="lids1">{{$staff->address}}</td>
                          <td class="lids1">{{$staff->phone}}</td>
                          <td class="lids1">{{$staff->email}}</td>
                          <td class="lids1">{{$staff->created_at}}</td>
                          <td class="lids1"><img src="{{asset('uploads/'.$staff->file_upload)}}" width="50px" height="35px" alt="error"></td>
                          <td class="lids1"><a href="{{route('show-staff', ['id'=>$staff->id])}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                          <td class="lids1"><a onclick="return confirm('Ban co chac muon xoa?')" href="{{route('delete-staff', ['id'=>$staff->id])}}"><i class="fa-solid fa-trash"></i></a></td>
                </tr>
                @endforeach
                </tbody>

              </table>
            </div>

            @endsection
