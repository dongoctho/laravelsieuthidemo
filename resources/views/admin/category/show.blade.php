
@extends('admin.dashboard')
@section('show-danhmuc')

<div class="add-body">

    <div class="add-top">
        <h1 class="themdonhang">SỬA DANH MỤC HÀNG HÓA</h1>
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
                        <p class="addp">Nhập mã danh mục</p>
                        <input type="text" name="code" value="{{$category->code}}" class="txtTen1">
                    </div>

                    <div class="nhapten">
                        <p class="addp">Nhập tên danh mục</p>
                        <input type="text" name="name" value="{{$category->name}}" class="txtTen1" >
                    </div>

                </div>

                <div class="add-bottom-2">

                    <div class="nhapten">
                        <p class="addp">Nhập mô tả danh mục</p>
                        <input type="text" name="description" value="{{$category->description}}" class="txtTen1">
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

