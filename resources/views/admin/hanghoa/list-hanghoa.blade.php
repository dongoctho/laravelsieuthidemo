@extends('admin.dashboard')
@section('list-hanghoa')

    <div class="card1">
        <div class="card-header">
          <h1 class="h1_themsp">Danh sách hàng hóa</h1>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table">
            <thead>
            <tr>
                          <th class="lids">ID</th>
                          <th class="lids">Mã hàng hóa</th>
                          <th class="lids">Tên hàng hóa</th>
                          <th class="lids">Mô tả</th>
                          <th class="lids">Thông tin bảo hành</th>
                          <th class="lids">Nhà sản xuất</th>
                          <th class="lids">Số lượng</th>
                          <th class="lids">Đơn vị tính</th>
                          <th class="lids">Danh mục</th>
                          <th class="lids">Created at</th>
                          <th class="lids">Hình ảnh</th>
                          <th class="lids">Sửa</th>
                          <th class="lids">Xóa</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($hanghoas as $hanghoa)
            <tr>
                      <td class="lids1">{{$hanghoa->id}}</td>
                      <td class="lids1">{{$hanghoa->code}}</td>
                      <td class="lids1">{{$hanghoa->name}}</td>
                      <td class="lids1">{{$hanghoa->description}}</td>
                      <td class="lids1">{{$hanghoa->insurance}}</td>
                      <td class="lids1">{{$hanghoa->producer->name}}</td>
                      <td class="lids1">{{$hanghoa->amount}}</td>
                      <td class="lids1">{{$hanghoa->unit}}</td>
                      <td class="lids1">{{$hanghoa->category->name}}</td>
                      <td class="lids1">{{$hanghoa->created_at}}</td>
                      <td class="lids1"><img src="{{asset('uploads/'.$hanghoa->file_upload)}}" width="50px" height="35px" alt="error"></td>
                      <td class="lids1"><a href="{{route('show-hanghoa', ['id'=>$hanghoa->id])}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                      <td class="lids1"><a onclick="return confirm('Ban co chac muon xoa?')" href="{{route('delete-hanghoa', ['id'=>$hanghoa->id])}}"><i class="fa-solid fa-trash"></i></a></td>
            </tr>
            @endforeach
            </tbody>

          </table>
        </div>

        @endsection
