
    @extends('admin.dashboard')
    @section('list-producer')

        <div class="card1">
            <div class="card-header">
              <h1 class="h1_themsp">Danh sách nhà cung cấp</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table">
                <thead>
                <tr>
                              <th class="lids">ID</th>
                              <th class="lids">Mã nhà cung cấp</th>
                              <th class="lids">Tên nhà cung cấp</th>
                              <th class="lids">Số điện thoại</th>
                              <th class="lids">Email</th>
                              <th class="lids">Địa chỉ</th>
                              <th class="lids">Created at</th>
                              <th class="lids">Sửa</th>
                              <th class="lids">Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($producers as $producer)
                <tr>
                          <td class="lids1">{{$producer->id}}</td>
                          <td class="lids1">{{$producer->code}}</td>
                          <td class="lids1">{{$producer->name}}</td>
                          <td class="lids1">{{$producer->phone}}</td>
                          <td class="lids1">{{$producer->email}}</td>
                          <td class="lids1">{{$producer->address}}</td>
                          <td class="lids1">{{$producer->created_at}}</td>
                          <td class="lids1"><a href="{{route('show-producer', ['id'=>$producer->id])}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                          <td class="lids1"><a onclick="return confirm('Ban co chac muon xoa?')" href="{{route('delete-producer', ['id'=>$producer->id])}}"><i class="fa-solid fa-trash"></i></a></td>
                </tr>
                @endforeach
                </tbody>

              </table>
            </div>

            @endsection
