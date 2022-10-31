
@extends('admin.dashboard')
@section('show-hanghoa')

<div class="add-body">

    <div class="add-top">
        <h1 class="themdonhang">THÊM HÀNG HÓA</h1>
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
                        <p class="addp">Nhập mã hàng hóa</p>
                        <input type="text" name="code" value="{{$hanghoa->code}}" class="txtTen1">
                    </div>

                    <div class="nhapten">
                        <p class="addp">Nhập tên hàng hóa</p>
                        <input type="text" name="name" value="{{$hanghoa->name}}" class="txtTen1" >
                    </div>

                </div>

                <div class="add-bottom-2">

                    <div class="nhapten">
                        <p class="addp">Nhập mô tả hàng hóa</p>
                        <input type="text" name="description" value="{{$hanghoa->description}}" class="txtTen1">
                    </div>

                    <div class="nhapten">
                        <p class="addp">Nhập thông tin bảo hành</p>
                        <input type="text" name="insurance" value="{{$hanghoa->insurance}}" class="txtTen1">
                    </div>

                </div>

                <div class="add-bottom-3">

                        <div class="nhapten">
                            <p class="addp">Nhập số lượng</p>
                            <input type="text" name="amount" value="{{$hanghoa->amount}}" class="txtTen1" >
                        </div>

                        <div class="nhapten">
                            <p class="addp">Nhập nhà sản xuất</p>
                            <select name="producer_id" class="txtTen1">
                                @foreach ($producers as $producer)
                                <?php
                                    if ($hanghoa->category_id == $producer->id) {
                                        ?>
                                        <option selected value="{{$producer->id}}">{{$producer->name}}</option>
                                    <?php
                                    }else{
                                        ?>
                                        <option value="{{$producer->id}}">{{$producer->name}}</option>
                                        <?php
                                    }
                                    ?>
                                @endphp

                                @endforeach
                                </select>
                        </div>


                </div>

                <div class="add-bottom-3">

                    <div class="nhapten">
                        <p class="addp">Nhập đơn vị tính</p>
                        <select name="unit" class="txtTen1">

                                    <option value="Cái">Cái</option>
                                    <option value="Đôi">Đôi</option>
                                    <option value="Cốc">Cốc</option>
                                    <option value="Kilogam">Kilogam</option>

                        </select>
                    </div>

                    <div class="nhapten">

                        <p class="addp">Nhập danh mục hàng hóa</p>
                        <select name="category_id" class="txtTen1">
                        @foreach ($categories as $category)
                        <?php
                            if ($hanghoa->category_id == $category->id) {
                                ?>
                                <option selected value="{{$category->id}}">{{$category->name}}</option>
                            <?php
                            }else{
                                ?>
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                <?php
                            }
                            ?>
                        @endphp

                        @endforeach
                        </select>

                    </div>

                </div>
                <div class="add-bottom-3">

                    <div class="nhapten">
                        <p class="addp">Nhập giá</p>
                        <input type="text" name="price" value="{{$hanghoa->price}}" class="txtTen1" >
                    </div>
                    <div class="upload">
                        <p class="addp">Nhập hình ảnh</p>
                        <input type="file" name="file_upload" class="txtTen1" >
                        <img src="{{asset('uploads/'.$hanghoa->file_upload)}}" width="50px" height="50px" alt="error">
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
