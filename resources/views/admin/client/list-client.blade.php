
    @extends('admin.dashboard')
    @section('list-staff')

        <div class="card1">
            <div class="card-header">
              <h1 class="h1_themsp">Danh sách khách hàng</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table">
                <thead>
                <tr>
                              <th class="lids">ID</th>
                              <th class="lids">Mã khách hàng</th>
                              <th class="lids">Tên khách hàng</th>
                              <th class="lids">Địa chỉ</th>
                              <th class="lids">Số điện thoại</th>
                              <th class="lids">Email</th>
                              <th class="lids">Ngày tạo</th>
                              <th class="lids">Sửa</th>
                              <th class="lids">Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($clients as $client)
                <tr>
                          <td class="lids1">{{$client->id}}</td>
                          <td class="lids1">{{$client->code}}</td>
                          <td class="lids1">{{$client->name}}</td>
                          <td class="lids1">{{$client->address}}</td>
                          <td class="lids1">{{$client->phone}}</td>
                          <td class="lids1">{{$client->email}}</td>
                          <td class="lids1">{{$client->created_at}}</td>
                          <td class="lids1"><a href="{{route('show-client', ['id'=>$client->id])}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                          <td class="lids1"><a onclick="return confirm('Ban co chac muon xoa?')" href="{{route('delete-client', ['id'=>$client->id])}}"><i class="fa-solid fa-trash"></i></a></td>
                </tr>
                @endforeach
                </tbody>

              </table>
            </div>

            @endsection
