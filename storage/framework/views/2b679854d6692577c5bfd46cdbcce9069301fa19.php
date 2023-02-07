<?php $__env->startSection('add-client'); ?>

<div class="add-body">

    <div class="add-top">
        <h1 class="themdonhang">THÊM KHÁCH HÀNG</h1>
    </div>

    <div class="add-bottom">

        <div class="add-bottom-input">

            <?php if(isset($msg)): ?>
            <?php echo e($msg); ?>

            <?php endif; ?>

            <form action="" method="post" enctype="multipart/form-data">

                <?php echo csrf_field(); ?>

                <div class="add-bottom-1">

                    <div class="nhapten">
                        <p class="addp">Nhập mã khách hàng</p>
                        <input type="text" name="code" class="txtTen1">
                    </div>

                    <div class="nhapten">
                        <p class="addp">Nhập tên khách hàng</p>
                        <input type="text" name="name" class="txtTen1" >
                    </div>

                </div>

                <div class="add-bottom-2">

                    <div class="nhapten">
                        <p class="addp">Nhập địa chỉ</p>
                        <input type="text" name="address" class="txtTen1">
                    </div>

                    <div class="nhapten">
                        <p class="addp">Nhập số điện thoại</p>
                        <input type="text" name="phone" class="txtTen1">
                    </div>

                </div>

                <div class="add-bottom-2">

                    <div class="nhapten">
                        <p class="addp">Nhập email</p>
                        <input type="text" name="email" class="txtTen1">
                    </div>

                </div>

                <div class="input-nhap">
                    <input type="submit" class="input-submit" value="submit">
                </div>

            </form>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/admin/client/add-client.blade.php ENDPATH**/ ?>