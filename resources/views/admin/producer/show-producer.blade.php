@extends('admin.dashboard')
@section('show-producer')

<div class="add-body">

    <div class="add-top">
        <h1 class="themdonhang">THÊM NHÀ CUNG CẤP</h1>
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
                        <p class="addp">Nhập mã nhà cung cấp</p>
                        <input type="text" name="code" value="{{$producer->code}}" class="txtTen1">
                    </div>

                    <div class="nhapten">
                        <p class="addp">Nhập tên nhà cung cấp</p>
                        <input type="text" name="name" value="{{$producer->name}}" class="txtTen1" >
                    </div>

                </div>

                <div class="add-bottom-2">

                    <div class="nhapten">
                        <p class="addp">Nhập số điện thoại</p>
                        <input type="text" name="phone" value="{{$producer->phone}}" class="txtTen1">
                    </div>
                    <div class="nhapten">
                        <p class="addp">Nhập email</p>
                        <input type="text" name="email" value="{{$producer->email}}" class="txtTen1">
                    </div>

                </div>
                <div class="add-bottom-2">

                    <div class="nhapten">
                        <p class="addp">Nhập địa chỉ</p>
                        <input type="text" name="address" value="{{$producer->address}}" class="txtTen1">
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

