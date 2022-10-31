@extends('admin.dashboard')
@section('add-client')

<div class="add-body">

    <div class="add-top">
        <h1 class="themdonhang"> SỬA THÔNG TIN KHÁCH HÀNG</h1>
    </div>

    <div class="add-bottom">

        <div class="add-bottom-input">

            @if (isset($msg))
            {{$msg}}
            @endif

            <form action="" method="post" enctype="multipart/form-data">

                @csrf

                <div class="add-bottom-1">

                    <div class="nhapten">
                        <p class="addp">Nhập mã khách hàng</p>
                        <input type="text" name="code" value="{{$client->code}}" class="txtTen1">
                    </div>

                    <div class="nhapten">
                        <p class="addp">Nhập tên khách hàng</p>
                        <input type="text" name="name" value="{{$client->name}}" class="txtTen1" >
                    </div>

                </div>

                <div class="add-bottom-2">

                    <div class="nhapten">
                        <p class="addp">Nhập địa chỉ</p>
                        <input type="text" name="address" value="{{$client->address}}"class="txtTen1">
                    </div>

                    <div class="nhapten">
                        <p class="addp">Nhập số điện thoại</p>
                        <input type="text" name="phone" value="{{$client->phone}}"class="txtTen1">
                    </div>

                </div>

                <div class="add-bottom-2">

                    <div class="nhapten">
                        <p class="addp">Nhập email</p>
                        <input type="text" name="email" value="{{$client->email}}"class="txtTen1">
                    </div>

                </div>

                <div class="input-nhap">
                    <input type="submit" class="input-submit" value="submit">
                </div>

            </form>

        </div>

    </div>

</div>

@endsection

