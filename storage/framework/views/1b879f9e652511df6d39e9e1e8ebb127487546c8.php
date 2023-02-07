<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo e(asset('css/styletrangchu1.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link href="<?php echo e(asset('css/sb-admin.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/dashbroad.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/hanghoa.css')); ?>">
    <link href="<?php echo e(asset('css/dropdown2.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="/bootstraps/css/lids1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="header-top">
            <div class="header-top-left">
                <div class="header-top-left-1">
                    <a class="iconsieuthi" href="/index.php">THODEPGIAIMART</a>
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
                        <a class="dk" href="<?php echo e(route('cart-list')); ?>">Giỏ hàng</a>
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

        <div class="header-bottom">
            <div class="header-bottom-left">
                <div class="header-bottom-left-dm dropdown"><a class="dmsp" href=""><i class="fa-solid fa-bars iconmenu"></i>DANH MỤC SẢN PHẨM</a>

                    <div class="dropdown-content">
                        <ul class="dropdown-content--ul">
                            <li class="dropdown-content--li">
                                <a href="">Khuyến mại trong tháng</a>
                            </li>
                            <li class="dropdown-content--li">

                                <div class="dropdown1">
                                    <span><a href="">Thời trang cho cả gia đình <i style="padding-left: 38px;font-weight: bold;">></i></a></span>
                                    <div class="dropdown-content1">
                                        <ul class="dropdown-content--ul--white">
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="/indexgiay.php">Giày thể thao</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="">Giày cao gót</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="">SANDAL nữ</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-content--li">
                                <div class="dropdown1">
                                    <span><a href="">Bánh kẹo – Đồ ăn vặt <i style="padding-left: 70px;font-weight: bold;">></i></a></span>
                                    <div class="dropdown-content1">
                                        <ul class="dropdown-content--ul--white">
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="/indexbanhsua.php">Bánh sữa</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="">Bánh tráng</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="">Trà sữa</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-content--li">

                                <div class="dropdown1">
                                    <span><a href="">Chăm sóc cá nhân <i style="padding-left: 86px;font-weight: bold;">></i></a></span>
                                    <div class="dropdown-content1">
                                        <ul class="dropdown-content--ul--white">
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="/indexbanchai.php">Bàn chải đánh răng</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="">Dầu gội đầu</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="">Lược</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-content--li">

                                <div class="dropdown1">
                                    <span><a href="">Dầu ăn - Gia vị nấu ăn <i style="padding-left: 61px;font-weight: bold;">></i></a></span>
                                    <div class="dropdown-content1">
                                        <ul class="dropdown-content--ul--white">
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="/indexdauan.php">Dầu ăn</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="">Tiêu hột</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="">Bột canh</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-content--li">

                                <div class="dropdown1">
                                    <span><a href="">Đi chợ <i style="padding-left: 156px;font-weight: bold;">></i></a></span>
                                    <div class="dropdown-content1">
                                        <ul class="dropdown-content--ul--white">
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="/indexdao.php">Dao</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="">Thìa</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="">Thớt</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-content--li">

                                <div class="dropdown1">
                                    <span><a href="">Điện Gia Dụng<i style="padding-left: 112px;font-weight: bold;">></i></a></span>
                                    <div class="dropdown-content1">
                                        <ul class="dropdown-content--ul--white">
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="/indexdaydien.php">Dây điện</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="">Ti vi</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="">Tủ lạnh</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-content--li">
                                <a href="">Đồ ăn nhanh – ship trong ngày</a>
                            </li>
                            <li class="dropdown-content--li">
                                <a href=""></a>
                                <div class="dropdown1">
                                    <span><a href="">Đồ dùng bếp <i style="padding-left: 119px;font-weight: bold;">></i></a></span>
                                    <div class="dropdown-content1">
                                        <ul class="dropdown-content--ul--white">
                                        <li>
                                                <a class="dropdown-content--ul--a--black" href="/indexthot.php">Thớt</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="">Thìa</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="">Dao</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-content--li">

                                <div class="dropdown1">
                                    <span><a href="">Đồ dùng gia đình<i style="padding-left: 98px;font-weight: bold;">></i></a></span>
                                    <div class="dropdown-content1">
                                        <ul class="dropdown-content--ul--white">
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="/indexgiuong.php">Giường</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="">Chiếu</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="">Chăn</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-content--li">

                                <div class="dropdown1">
                                    <span><a href="">Đồ uống <i style="padding-left: 144px;font-weight: bold;">></i></a></span>
                                    <div class="dropdown-content1">
                                        <ul class="dropdown-content--ul--white">
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="/indextrasua.php">Trà sữa</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="">C2 trà đào</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="">Trà đá</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-content--li">

                                <div class="dropdown1">
                                    <span><a href="">Mì –Cháo – Phở ăn liền <i style="padding-left: 54px;font-weight: bold;">></i></a></span>
                                    <div class="dropdown-content1">
                                        <ul class="dropdown-content--ul--white">
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="/indexmitom.php">Mì tôm</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="">Cháo ăn liền</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="">Phở Ăn liền</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-content--li">

                                <div class="dropdown1">
                                    <span><a href="">Sữa – Đồ ăn cho bé <i style="padding-left: 75px;font-weight: bold;">></i></a></span>
                                    <div class="dropdown-content1">
                                        <ul class="dropdown-content--ul--white">
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="">Sữa bột</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="">Cháo dinh dưỡng</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-content--ul--a--black" href="">Sữa hộp</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-bottom-center">
                <a href=""><i class="fa-solid fa-bullhorn iconloa"></i></a>
                <p class="freeship"> FREESHIP VỚI HOÁ ĐƠN TRÊN 300.000VNĐ!</p>
            </div>
            <div class="header-bottom-right">
                <a class="hotline" href=""><i class="fa-solid fa-phone iconphone"></i> Hotline: 1900 066 698</a>
            </div>
        </div>
    </header>

    <?php echo $__env->yieldContent('orderadd'); ?>
    <?php echo $__env->yieldContent('list-cart'); ?>

    <div class="slb3" style="margin-top: 100px">
        <div class="slide">
            <div class="w3-content w3-section slidebar" style="max-width:50%">
                <img class="mySlides" src="<?php echo e(asset('uploads/slidebar1.png')); ?>" style="max-width:160%">
                <img class="mySlides" src="<?php echo e(asset('uploads/slidebar2.png')); ?>" style="max-width:160%">
                <img class="mySlides" src="<?php echo e(asset('uploads/slidebar3.png')); ?>" style="max-width:160%">
            </div>
        </div>
        <div class="slide-bottom">
            <img class="img-slide" src="/uploads/ddhh.png" alt="">
            <img class="img-slide" src="/uploads/ghtl.png" alt="">
            <img class="img-slide" src="/uploads/tgtk.png" alt="">
        </div>
    </div>



    <div class="menu">
        <div class="menu-top">
            <h2 class="menuh2">Nhóm hàng phổ biến</h2>
        </div>
        <div class="menu-bottom">
            <ul class="menu-ul">
                <li class="menu-li">
                    <a href=""><img style="width: 70%;" src="https://lanchi.vn/wp-content/uploads/2021/10/sua-tuoi4x.jpg" alt=""></a>
                    <p class="lip">Sữa tươi các loại</p>
                </li>
                <li class="menu-li">
                    <a href=""><img style="width: 56%;" src="https://lanchi.vn/wp-content/uploads/2021/10/migoi.jpg" alt=""></a>
                    <p class="lip">Mì gói ăn liền</p>
                </li>
                <li class="menu-li">
                    <a href=""><img style="width: 65%;" src="https://lanchi.vn/wp-content/uploads/2021/10/dauan.jpg" alt=""></a>
                    <p class="lip">Dầu ăn các loại</p>
                </li>
                <li class="menu-li">
                    <a href=""><img style="width: 56%;" src="https://lanchi.vn/wp-content/uploads/2021/10/nuocman.jpg" alt=""></a>
                    <p class="lip">Nước mắm</p>
                </li>
                <li class="menu-li">
                    <a href=""><img style="width: 56%;" src="https://lanchi.vn/wp-content/uploads/2021/10/banhkeo.jpg" alt=""></a>
                    <p class="lip">Bánh đóng hộp</p>
                </li>
                <li class="menu-li">
                    <a href=""><img style="width: 66%;" src="https://lanchi.vn/wp-content/uploads/2021/10/suachia.jpg" alt=""></a>
                    <p class="lip">Sữa chua</p>
                </li>
                <li class="menu-li">
                    <a href=""><img style="width: 75%;" src="https://lanchi.vn/wp-content/uploads/2022/01/dau-goi-ngan-rung-toc-pantene-650ml-202107160850539541.jpg" alt=""></a>
                    <p class="lip">Chăm sóc cá nhân</p>
                </li>
                <li class="menu-li">
                    <a href=""><img style="width: 56%;" src="https://lanchi.vn/wp-content/uploads/2022/01/b803488fcdbf3827519e453735998290.jpg" alt=""></a>
                    <p class="lip">Vệ sinh nhà cửa</p>
                </li>

            </ul>
        </div>
    </div>

    <div class="body">
        <div class="category">
            <div class="category-top">
                <div class="category-top-up">
                    <a class="a-gtct" href="">Giá Tốt Cả Tháng</a>
                    <a class="a-xtc" href="">Xem tất cả ></a>
                </div>
                <p class="sb">SORT BY</p>
            </div>
            <div class="category-bottom">
                <a style="color: red;" href="">New Arrivals</a>
                <div class="product--giay">
                    <a href="">
                        <h1 class="center">SẢN PHẨM</h1>
                    </a>
                    <div class="product--ul">

                            <?php $__currentLoopData = $hanghoas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hanghoa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="product--li">
                                <a href="<?php echo e(route('cart-add',['id'=>$hanghoa->id])); ?>"><img class="a-giaynu"
                                   src="<?php echo e(asset('uploads/'.$hanghoa->file_upload)); ?>" style="width: 150px; height:200px" alt=""></a>
                                <a href="<?php echo e(route('cart-add',['id'=>$hanghoa->id])); ?>">
                                    <p><?php echo e($hanghoa->name); ?></p>
                                </a>
                                <p><?php echo e($hanghoa->price); ?> đ</p>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>
</body>

</html>
<?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/index/index.blade.php ENDPATH**/ ?>