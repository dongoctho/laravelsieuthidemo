<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link href="<?php echo e(asset('css/sb-admin.css')); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo e(asset('css/dashbroad.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/hanghoa.css')); ?>">
<link href="<?php echo e(asset('css/dropdown2.css')); ?>" rel="stylesheet">
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
                <span><a href="<?php echo e(route('index')); ?>" class="nav-link dropdowna">Trang chủ</a></span>
        </li>
          <li class="dropdown-content--li nav-item">
            <div class="dropdown1">
                <span><a href="" class="nav-link dropdowna">Quản lí thông tin khách hàng</a></span>
                <div class="dropdown-content1">
                    <ul class="dropdown-content--ul--white">
                        <li>
                            <a class="dropdown-content--li1" href="<?php echo e(route('client-create')); ?>">Thêm thông tin khách hàng</a>
                        </li>
                        <li>
                            <a class="dropdown-content--li1" href="<?php echo e(route('client-list')); ?>">Danh sách khách hàng</a>
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
                            <a class="dropdown-content--li1" href="<?php echo e(route('hanghoa-create')); ?>">Thêm hàng hóa</a>
                        </li>
                        <li>
                            <a class="dropdown-content--li1" href="<?php echo e(route('hanghoa-list')); ?>">Danh sách hàng hóa</a>
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
                            <a class="dropdown-content--li1" href="<?php echo e(route('producer-create')); ?>">Thêm nhà cung cấp</a>
                        </li>
                        <li>
                            <a class="dropdown-content--li1" href="<?php echo e(route('producer-list')); ?>">Danh sách nhà cung cấp</a>
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
                            <a class="dropdown-content--li1" href="<?php echo e(route('staff-create')); ?>">Thêm nhân viên</a>
                        </li>
                        <li>
                            <a class="dropdown-content--li1" href="<?php echo e(route('staff-list')); ?>">Danh sách nhân viên</a>
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
                            <a class="dropdown-content--li1" href="<?php echo e(route('order-list')); ?>">Danh sách đơn hàng</a>
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
                            <a class="dropdown-content--li1" href="<?php echo e(route('category-create')); ?>" >Thêm danh mục hàng hóa</a>
                        </li>
                        <li>
                            <a class="dropdown-content--li1" href="<?php echo e(route('list-category')); ?>">Danh sách danh mục hàng hóa</a>
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

        <?php echo $__env->yieldContent('add-hanghoa'); ?>
        <?php echo $__env->yieldContent('list-hanghoa'); ?>
        <?php echo $__env->yieldContent('show-hanghoa'); ?>

        <?php echo $__env->yieldContent('add-danhmuc'); ?>
        <?php echo $__env->yieldContent('list-danhmuc'); ?>
        <?php echo $__env->yieldContent('show-danhmuc'); ?>

        <?php echo $__env->yieldContent('add-producer'); ?>
        <?php echo $__env->yieldContent('list-producer'); ?>
        <?php echo $__env->yieldContent('show-producer'); ?>

        <?php echo $__env->yieldContent('add-staff'); ?>
        <?php echo $__env->yieldContent('list-staff'); ?>
        <?php echo $__env->yieldContent('show-staff'); ?>

        <?php echo $__env->yieldContent('add-client'); ?>
        <?php echo $__env->yieldContent('list-client'); ?>
        <?php echo $__env->yieldContent('show-client'); ?>

        <?php echo $__env->yieldContent('add-order'); ?>
        <?php echo $__env->yieldContent('list-order'); ?>
        <?php echo $__env->yieldContent('show-order'); ?>

</body>
</html>
<?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>