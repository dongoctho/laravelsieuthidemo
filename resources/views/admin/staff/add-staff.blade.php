@extends('admin.dashboard')
@section('add-staff')

<div class="add-body">

    <div class="add-top">
        <h1 class="themdonhang">THÊM NHÂN VIÊN</h1>
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
                        <p class="addp">Nhập mã nhân viên</p>
                        <input type="text" name="code" class="txtTen1">
                    </div>

                    <div class="nhapten">
                        <p class="addp">Nhập tên nhân viên</p>
                        <input type="text" name="name" class="txtTen1" >
                    </div>

                </div>

                <div class="add-bottom-2">

                    <div class="nhapten">
                        <p class="addp">Nhập địa chỉ nhân viên</p>
                        <input type="text" name="address" class="txtTen1">
                    </div>

                    <div class="nhapten">
                        <p class="addp">Nhập nhập số điện thoại</p>
                        <input type="text" name="phone" class="txtTen1">
                    </div>

                </div>

                <div class="add-bottom-3">

                        <div class="nhapten">
                            <p class="addp">Nhập email</p>
                            <input type="text" name="email" class="txtTen1" >
                        </div>
                        <div class="nhapten">
                            <p class="addp">Nhập hình ảnh nhân viên</p>
                            <input type="file" name="file_upload" class="txtTen1" >
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
