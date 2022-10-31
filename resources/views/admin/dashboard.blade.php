<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/dashbroad.css')}}">
<link rel="stylesheet" href="{{asset('css/hanghoa.css')}}">
<link href="{{asset('css/dropdown2.css')}}" rel="stylesheet">
<link rel="stylesheet" href="/bootstraps/css/lids1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Thêm hàng hóa</title>
</head>
<body>
    <div id="wrapper">
        <ul class="sidebar navbar-nav bgcl">
          <li class="nav-item active">
            <a class="nav-link " href="">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Quản Lí</span>
            </a>
          </li>
          <li class="dropdown-content--li nav-item">
                <span><a href="{{route('index')}}" class="nav-link dropdowna">Trang chủ</a></span>
        </li>
          <li class="dropdown-content--li nav-item">
            <div class="dropdown1">
                <span><a href="" class="nav-link dropdowna">Quản lí thông tin khách hàng</a></span>
                <div class="dropdown-content1">
                    <ul class="dropdown-content--ul--white">
                        <li>
                            <a class="dropdown-content--li1" href="{{route('client-create')}}">Thêm thông tin khách hàng</a>
                        </li>
                        <li>
                            <a class="dropdown-content--li1" href="{{route('client-list')}}">Danh sách khách hàng</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
          <li class="dropdown-content--li nav-item">
            <div class="dropdown1">
                <span><a href="" class="nav-link dropdowna">Quản lí hàng hóa</a></span>
                <div class="dropdown-content1">
                    <ul class="dropdown-content--ul--white">
                        <li>
                            <a class="dropdown-content--li1" href="{{route('hanghoa-create')}}">Thêm hàng hóa</a>
                        </li>
                        <li>
                            <a class="dropdown-content--li1" href="{{route('hanghoa-list')}}">Danh sách hàng hóa</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
          <li class="dropdown-content--li nav-item">
            <div class="dropdown1">
                <span><a href="" class="nav-link dropdowna">Quản lí nhà cung cấp</a></span>
                <div class="dropdown-content1">
                    <ul class="dropdown-content--ul--white">
                        <li>
                            <a class="dropdown-content--li1" href="{{route('producer-create')}}">Thêm nhà cung cấp</a>
                        </li>
                        <li>
                            <a class="dropdown-content--li1" href="{{route('producer-list')}}">Danh sách nhà cung cấp</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
          <li class="dropdown-content--li nav-item">
            <div class="dropdown1">
                <span><a href="" class="nav-link dropdowna">Quản lí nhân viên</a></span>
                <div class="dropdown-content1">
                    <ul class="dropdown-content--ul--white">
                        <li>
                            <a class="dropdown-content--li1" href="{{route('staff-create')}}">Thêm nhân viên</a>
                        </li>
                        <li>
                            <a class="dropdown-content--li1" href="{{route('staff-list')}}">Danh sách nhân viên</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
          <li class="dropdown-content--li nav-item">
            <div class="dropdown1">
                <span><a href="" class="nav-link dropdowna">Quản lí kho hàng</a></span>
                <div class="dropdown-content1">
                    <ul class="dropdown-content--ul--white">
                        <li>
                            <a class="dropdown-content--li1" href="/nhapkho.php">Nhập hàng</a>
                        </li>
                        <li>
                            <a class="dropdown-content--li1" href="/xuatkho.php">Xuất hàng</a>
                        </li>
                        <li>
                            <a class="dropdown-content--li1" href="/danhsachkhohang.php">Danh sách kho hàng</a>
                        </li>
                    </ul>
                </div>
            </div>
          </li>
          <li class="dropdown-content--li nav-item">
            <div class="dropdown1">
                <span><a href="" class="nav-link dropdowna">Quản lí đơn hàng</a></span>
                <div class="dropdown-content1">
                    <ul class="dropdown-content--ul--white">
                        <li>
                            <a class="dropdown-content--li1" href="{{route('order-list')}}">Danh sách đơn hàng</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
          <li class="dropdown-content--li nav-item">
            <div class="dropdown1">
                <span><a href="" class="nav-link dropdowna">Quản lí danh mục hàng hóa</a></span>
                <div class="dropdown-content1">
                    <ul class="dropdown-content--ul--white">
                        <li>
                            <a class="dropdown-content--li1" href="{{route('category-create')}}" >Thêm danh mục hàng hóa</a>
                        </li>
                        <li>
                            <a class="dropdown-content--li1" href="{{route('list-category')}}">Danh sách danh mục hàng hóa</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <li class="dropdown-content--li nav-item">
            <div class="dropdown1">
                <span><a href="" class="nav-link dropdowna">Quản lí báo cáo thông kê</a></span>
                <div class="dropdown-content1">
                    <ul class="dropdown-content--ul--white">
                        <li>
                            <a class="dropdown-content--li1" href="/baocaonamthang.php">BCTK theo tháng - năm</a>
                        </li>
                        <li>
                            <a class="dropdown-content--li1" href="/baocaonv.php">BCTK theo doanh số nhân viên</a>
                        </li>
                        <li>
                            <a class="dropdown-content--li1" href="/baocaotonghop.php">BCTK tổng hợp</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <li class="dropdown-content--li nav-item">
            <div class="dropdown1">
                <span><a href="" class="nav-link dropdowna">Quản lí khuyến mại tích điểm</a></span>
                <div class="dropdown-content1">
                    <ul class="dropdown-content--ul--white">
                        <li>
                            <a class="dropdown-content--li1" href="/themkmtichdiem.php">Thêm thẻ tích điểm</a>
                        </li>
                        <li>
                            <a class="dropdown-content--li1" href="/danhsachkmtichdiem.php">Danh sách thẻ tích điểm</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
          <li class="nav-item">
            <a class="nav-link " href="#">

            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">

            </a>
          </li>

        </ul>

        @yield('add-hanghoa')
        @yield('list-hanghoa')
        @yield('show-hanghoa')

        @yield('add-danhmuc')
        @yield('list-danhmuc')
        @yield('show-danhmuc')

        @yield('add-producer')
        @yield('list-producer')
        @yield('show-producer')

        @yield('add-staff')
        @yield('list-staff')
        @yield('show-staff')

        @yield('add-client')
        @yield('list-client')
        @yield('show-client')

        @yield('add-order')
        @yield('list-order')
        @yield('show-order')

</body>
</html>
