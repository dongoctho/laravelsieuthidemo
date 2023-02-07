@extends('index.index')
@section('list-cart')

    <div class="card1">
        <div class="card-header">
          <h1 class="h1_themsp">GIỎ HÀNG</h1>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table" style="margin-top: 50px">
            <thead>
            <tr>
                          <th class="lids"></th>
                          <th class="lids">Tên sản phẩm</th>
                          <th class="lids">Đơn giá</th>
                          <th class="lids">Số lượng</th>
                          <th class="lids">Tổng giá</th>
                          <th class="lids">Thanh toán</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($carts as $cart)
            <tr>
                      <td class="lids1"><img src="{{asset('uploads/'.$cart->file_upload)}}" width="50px" height="35px" alt="error"></td>
                      <td class="lids1">{{$cart->name}}</td>
                      <td class="lids1">{{$cart->price}}</td>
                      <td class="lids1">{{$cart->amount}}</td>
                      <td class="lids1">{{$cart->total}}</td>
                      <td class="lids1"><a href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>

        @endsection
