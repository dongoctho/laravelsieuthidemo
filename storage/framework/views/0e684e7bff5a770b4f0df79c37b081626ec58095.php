<?php $__env->startSection('add-danhmuc'); ?>

<div class="add-body">

    <div class="add-top">
        <h1 class="themdonhang">SỬA DANH MỤC HÀNG HÓA</h1>
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
                        <p class="addp">Nhập mã danh mục</p>
                        <input type="text" name="code" value="<?php echo e($category->code); ?>" class="txtTen1">
                    </div>

                    <div class="nhapten">
                        <p class="addp">Nhập tên danh mục</p>
                        <input type="text" name="name" value="<?php echo e($category->name); ?>" class="txtTen1" >
                    </div>

                </div>

                <div class="add-bottom-2">

                    <div class="nhapten">
                        <p class="addp">Nhập mô tả danh mục</p>
                        <input type="text" name="description" value="<?php echo e($category->description); ?>" class="txtTen1">
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


<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/admin/category/show.blade.php ENDPATH**/ ?>