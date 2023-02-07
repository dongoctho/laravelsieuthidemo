<?php $__env->startSection('show-staff'); ?>

<div class="add-body">

    <div class="add-top">
        <h1 class="themdonhang">SỬA THÔNG TIN NHÂN VIÊN</h1>
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
                        <p class="addp">Nhập mã nhân viên</p>
                        <input type="text" name="code" value="<?php echo e($staff->code); ?>" class="txtTen1">
                    </div>

                    <div class="nhapten">
                        <p class="addp">Nhập tên nhân viên</p>
                        <input type="text" name="name" value="<?php echo e($staff->name); ?>" class="txtTen1" >
                    </div>

                </div>

                <div class="add-bottom-2">

                    <div class="nhapten">
                        <p class="addp">Nhập địa chỉ nhân viên</p>
                        <input type="text" name="address" value="<?php echo e($staff->address); ?>" class="txtTen1">
                    </div>

                    <div class="nhapten">
                        <p class="addp">Nhập nhập số điện thoại</p>
                        <input type="text" name="phone" value="<?php echo e($staff->phone); ?>" class="txtTen1">
                    </div>

                </div>

                <div class="add-bottom-3">

                        <div class="nhapten">
                            <p class="addp">Nhập email</p>
                            <input type="text" name="email" value="<?php echo e($staff->email); ?>" class="txtTen1" >
                        </div>
                        

                        <div class="nhapten">
                            <div class="upload">
                                <p class="addp">Nhập hình ảnh nhân viên</p>
                                <input type="file" name="file_upload" class="txtTen1" >
                                <img src="<?php echo e(asset('uploads/'.$staff->file_upload)); ?>" width="50px" height="50px" alt="error">
                            </div>

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

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/admin/staff/show-staff.blade.php ENDPATH**/ ?>