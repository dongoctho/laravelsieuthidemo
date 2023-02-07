<div class="add-body">
    <div class="add-top">
        <h1 class="themdonhang">SỬA HÀNG HÓA</h1>
    </div>
    <div class="add-bottom">
        <div class="add-bottom-input">
            <?php if(isset($msg)): ?>
    <?php echo e($msg); ?>

<?php endif; ?>
            <form action="" method="post">
                <?php echo csrf_field(); ?>
                <div class="add-bottom-1">
                    <div class="nhapten">
                        <p class="addp">Nhập mã hàng hóa</p>
                        <input type="text" name="mahanghoa" value="<?php echo e($hanghoa->mahanghoa); ?>" class="txtTen1">
                    </div>
                    <div class="nhapten">
                        <p class="addp">Nhập tên hàng hóa</p>
                        <input type="text" name="tenhanghoa" value="<?php echo e($hanghoa->tenhanghoa); ?>" class="txtTen2" >
                    </div>
                </div>
                <div class="add-bottom-2">
                    <div class="nhapten">
                        <p class="addp">Nhập mô tả hàng hóa</p>
                        <input type="text" name="mota" value="<?php echo e($hanghoa->mota); ?>" class="txtTen1">
                    </div>
                    <div class="nhapten">
                        <p class="addp">Nhập thông tin bảo hành</p>
                        <input type="text" name="thongtinbaohanh" value="<?php echo e($hanghoa->thongtinbaohanh); ?>" class="txtTen2">
                    </div>

                </div>
                <div class="add-bottom-3">
                <div class="nhaptenitem">
                            
                        <div class="nhapten">
                            <p class="addp1">Nhập số lượng</p>
                            <input type="text" name="soluong" value="<?php echo e($hanghoa->soluong); ?>" class="txtTen3" >
                        </div>
                        <div class="nhapten">
                            <p class="addp">Nhập nhà sản xuất</p>
                            <input type="text" name="nhasx" value="<?php echo e($hanghoa->nhasx); ?>" class="txtTen2">
                        </div>

                    
                        <div class="nhapten">
                            <p class="addp1">Nhập đơn vị tính</p>
                            <input type="text" name="donvitinh" value="<?php echo e($hanghoa->donvitinh); ?>" class="txtTen3" >
                        </div>

                </div>
                
                        <div class="nhapten">
                            <p class="addp1">Nhập danh mục hàng hóa</p>
                            <input type="text" name="danhmuc" value="<?php echo e($hanghoa->danhmuc); ?>" class="txtTen3" >
                        </div>
                        <div class="nhapten">
                            <input type="submit" value="submit">
                    </div>
            </form>

        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/admin/hanghoa/show.blade.php ENDPATH**/ ?>