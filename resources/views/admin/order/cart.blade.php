@extends('index.index')
@section('list-cart')

    <div class="card1">
        <div class="card-header">
          <h1 class="h1_themsp">GIỎ HÀNG</h1>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table">
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
            @foreach ($hanghoashow as $hanghoaa)
            <tr>
                      <td class="lids1">{{$hanghoaa->id}}</td>
                      <td class="lids1">{{$hanghoaa->product_name}}</td>
                      <td class="lids1">{{$hanghoaa->price}}</td>
                      <td class="lids1">{{$hanghoaa->amount}}</td>
                      <td class="lids1">{{$hanghoaa->voucher}}</td>
                      <td class="lids1">{{$hanghoaa->total}}</td>
                      <td class="lids1"><a href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>

        @endsection
