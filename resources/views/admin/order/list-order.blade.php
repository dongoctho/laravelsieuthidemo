@extends('admin.dashboard')
@section('list-order')

    <div class="card1">
        <div class="card-header">
          <h1 class="h1_themsp">Danh sách đơn hàng</h1>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table">
            <thead>
            <tr>
                          <th class="lids">ID</th>
                          <th class="lids">Tên khách hàng</th>
                          <th class="lids">Quốc gia/Khu vực</th>
                          <th class="lids">Tỉnh thành</th>
                          <th class="lids">Quận huyện</th>
                          <th class="lids">Địa chỉ</th>
                          <th class="lids">Số điện thoại</th>
                          <th class="lids">Địa chỉ Email</th>
                          <th class="lids">Ghi chú</th>
                          <th class="lids">Tên sản phẩm</th>
                          <th class="lids">Đơn giá</th>
                          <th class="lids">Số lượng</th>
                          <th class="lids">Mã giảm giá</th>
                          <th class="lids">Tổng giá</th>
                          <th class="lids">Phương thức thanh toán</th>
                          <th class="lids">Created at</th>
                          <th class="lids">Sửa</th>
                          <th class="lids">Hoàn thành</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($orders as $order)
            <tr>
                      <td class="lids1">{{$order->id}}</td>
                      <td class="lids1">{{$order->name." ".$order->surname}}</td>
                      <td class="lids1">{{$order->country}}</td>
                      <td class="lids1">{{$order->city}}</td>
                      <td class="lids1">{{$order->district}}</td>
                      <td class="lids1">{{$order->address}}</td>
                      <td class="lids1">{{$order->phone}}</td>
                      <td class="lids1">{{$order->email}}</td>
                      <td class="lids1">{{$order->description}}</td>
                      <td class="lids1">{{$order->product_name}}</td>
                      <td class="lids1">{{$order->price}}</td>
                      <td class="lids1">{{$order->amount}}</td>
                      <td class="lids1">{{$order->voucher}}</td>
                      <td class="lids1">{{$order->total}}</td>
                      <td class="lids1">{{$order->payment}}</td>
                      <td class="lids1">{{$order->created_at}}</td>
                      <td class="lids1"><a href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
                      <td class="lids1"><a onclick="return confirm('Đơn hàng đã được nhận?')" href="{{route('delete-order', ['id'=>$order->id])}}"><i class="fa-solid fa-trash"></i></a></td>
            </tr>
            @endforeach
            </tbody>

          </table>
        </div>

        @endsection
