
    @extends('admin.dashboard')
    @section('list-danhmuc')

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
                              <th class="lids">Mã danh mục</th>
                              <th class="lids">Tên danh mục</th>
                              <th class="lids">Mô tả</th>
                              <th class="lids">Created at</th>
                              <th class="lids">Sửa</th>
                              <th class="lids">Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)
                <tr>
                          <td class="lids1">{{$category->id}}</td>
                          <td class="lids1">{{$category->code}}</td>
                          <td class="lids1">{{$category->name}}</td>
                          <td class="lids1">{{$category->description}}</td>
                          <td class="lids1">{{$category->created_at}}</td>
                          <td class="lids1"><a href="{{route('show-category', ['id'=>$category->id])}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                          <td class="lids1"><a onclick="return confirm('Ban co chac muon xoa?')" href="{{route('delete-category', ['id'=>$category->id])}}"><i class="fa-solid fa-trash"></i></a></td>
                </tr>
                @endforeach
                </tbody>

              </table>
            </div>

            @endsection
