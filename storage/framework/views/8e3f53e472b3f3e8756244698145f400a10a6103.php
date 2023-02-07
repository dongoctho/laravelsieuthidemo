<?php $__env->startSection('headerIndex'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo e(asset('css/styletrangchu1.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="header-top">
            <div class="header-top-left">
                <div class="header-top-left-1">
                    <a class="iconsieuthi" href="/index.php">LANCHIMART</a>
                </div>
                <div class="header-top-left-2">
                    <input class="timkiem" type="text" placeholder="Tìm kiếm sản phẩm">
                    <a href=""><i class="fa-solid fa-magnifying-glass icontk"></i></a>
                </div>
            </div>
            <div class="header-top-right">
                <div class="header-top-right-1">
                    <div class="header-top-right-1-1"><a href=""><i class="fa-solid fa-user iconuser"></i></a></div>
                    <div class="header-top-right-1-2">
                        <a class="dk" href="/BTVN_1/BTVN_1/signIn.html">Đăng ký</a>
                        <a class="dn" href="/BTVN_1/BTVN_1/login.html">Đăng nhập</a>
                    </div>

                </div>
                <div class="header-top-right-1">
                    <div class="header-top-right-1-1"><a href=""><i class="fa-solid fa-cart-shopping iconcard"></i></a></div>
                    <div class="header-top-right-1-2">
                        <a class="dk" href="">Giỏ hàng</a>
                        <a class="dn" href="">0 đ</a>
                    </div>
                </div>
                <div class="header-top-right-1">
                    <div class="header-top-right-1-1"><a href=""><i class="fa-solid fa-location-dot iconmap"></i></a></div>
                    <div class="header-top-right-1-2">
                        <a class="dk" href="">Tìm siêu thị gần bạn</a>
                        <a class="dn" href="">Hệ thống 24 siêu thị</a>
                    </div>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('index.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/inc/headerIndex.blade.php ENDPATH**/ ?>