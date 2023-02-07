<?php $__env->startSection('add-hanghoa'); ?>

<div class="add-body">

    <div class="add-top">
        <h1 class="themdonhang">THÊM HÀNG HÓA</h1>
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
                        <p class="addp">Nhập mã hàng hóa</p>
                        <input type="text" name="code" class="txtTen1">
                    </div>

                    <div class="nhapten">
                        <p class="addp">Nhập tên hàng hóa</p>
                        <input type="text" name="name" class="txtTen1" >
                    </div>

                </div>

                <div class="add-bottom-2">

                    <div class="nhapten">
                        <p class="addp">Nhập mô tả hàng hóa</p>
                        <input type="text" name="description" class="txtTen1">
                    </div>

                    <div class="nhapten">
                        <p class="addp">Nhập thông tin bảo hành</p>
                        <input type="text" name="insurance" class="txtTen1">
                    </div>

                </div>

                <div class="add-bottom-3">

                        <div class="nhapten">
                            <p class="addp">Nhập số lượng</p>
                            <input type="text" name="amount" class="txtTen1" >
                        </div>

                        <div class="nhapten">
                            <p class="addp">Nhập nhà sản xuất</p>
                            <select name="producer_id" class="txtTen1">
                                <?php $__currentLoopData = $producers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($producer->id); ?>"><?php echo e($producer->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                    </div>

                </div>
                <div class="add-bottom-3">

                    <div class="nhapten">
                        <p class="addp">Nhập giá</p>
                        <input type="text" name="price" class="txtTen1" >
                    </div>
                    <div class="nhapten">
                        <p class="addp">Nhập hình ảnh</p>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/admin/hanghoa/add-hanghoa.blade.php ENDPATH**/ ?>