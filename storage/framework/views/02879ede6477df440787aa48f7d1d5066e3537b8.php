<?php $__env->startSection('add-order'); ?>

<div class="add-body">

    <div class="add-top">
        <h1 class="themdonhang">SỬA ĐƠN HÀNG</h1>
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
                        <p class="addp">Chọn tên khách hàng</p>
                        <select name="client_id" class="txtTen1">
                            <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    if ($orders->category_id == $client->id) {
                                        ?>
                                        <option selected value="<?php echo e($client->id); ?>"><?php echo e($client->name); ?></option>
                                    <?php
                                    }else{
                                        ?>
                                        <option value="<?php echo e($client->id); ?>"><?php echo e($client->name); ?></option>
                                        <?php
                                    }
                                    ?>
                                @endphp

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                    </div>

                    <div class="nhapten">
                        <p class="addp">Nhập địa chỉ</p>
                        <input type="text" name="address" value="<?php echo e($orders->address); ?>" class="txtTen1" >
                    </div>

                </div>

                <div class="add-bottom-2">

                    <div class="nhapten">
                        <p class="addp">Chọn tên hàng</p>
                        <select name="product_id" class="txtTen1">
                            <?php $__currentLoopData = $hanghoas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hanghoa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            if ($orders->product_id == $hanghoa->id) {
                                ?>
                                <option selected value="<?php echo e($hanghoa->id); ?>"><?php echo e($hanghoa->name); ?></option>
                            <?php
                            }else{
                                ?>
                                <option value="<?php echo e($hanghoa->id); ?>"><?php echo e($hanghoa->name); ?></option>
                                <?php
                            }
                            ?>
                            @endphp
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                    </div>

                    <div class="nhapten">
                        <p class="addp">Nhập số lượng</p>
                        <input type="text" name="amount" value="<?php echo e($orders->amount); ?>" class="txtTen1">
                    </div>

                </div>

                <div class="add-bottom-3">

                        <div class="nhapten">
                            <p class="addp">Nhập đơn giá</p>
                            <input type="text" name="price" value="<?php echo e($orders->price); ?>" class="txtTen1" >
                        </div>

                        <div class="nhapten">
                            <p class="addp">Nhập phương thức thanh toán</p>
                            <select value="<?php echo e($orders->payment); ?>" name="payment" class="txtTen1">
                                <option value="ViettelPay">ViettelPay</option>
                                <option value="Banking">Thanh toán bằng Thẻ ngân hàng</option>
                                <option value="ZaloPay">ZaloPay</option>
                                <option value="MÔM">MOMO</option>
                                <option value="Tiền mặt">Thanh toán bằng tiền mặt</option>
                                </select>
                        </div>

                </div>

                <div class="add-bottom-3">

                    <div class="nhapten">
                        <p class="addp">Chọn người lập hóa đơn</p>
                        <select name="staff_id" class="txtTen1">
                            <?php $__currentLoopData = $staffs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            if ($orders->staff_id == $staff->id) {
                                ?>
                                <option selected value="<?php echo e($staff->id); ?>"><?php echo e($staff->name); ?></option>
                            <?php
                            }else{
                                ?>
                                <option value="<?php echo e($staff->id); ?>"><?php echo e($staff->name); ?></option>
                                <?php
                            }
                            ?>
                            @endphp
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                    </div>



                    <div class="nhapten">
                        <p class="addp">Tổng tiền</p>
                        <input type="text" name="total" value="<?php echo e($orders->total); ?>" class="txtTen1" disabled>
                        <p id="tinhtong" style="padding-top:5px;height: 35px;margin-left: 50px;width: 400px;cursor:pointer;touch-action: manipulation;font-weight: 800;text-align: center;font-size: 13px;background-color: #e1ecf4;border-radius: 8px; border: 1px solid #7aa7c7;box-shadow: rgb(255 255 255 / 70%) 0 1px 0 0 inset;color: #39739d;">Tổng tiền</p>
                    </div>

                </div>

                <div class="input-nhap">
                    <input type="submit" class="input-submit" value="submit">
                </div>

            </form>
        </div>

    </div>

</div>
<script>
    $(function(){
        $("#tinhtong").click(function () {
           var a = parseInt($("input[name='price']").val());
          var b = parseInt($("input[name='amount']").val());
          $("input[name='total']").val(a*b);
        }).change();
    });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/admin/order/show-order.blade.php ENDPATH**/ ?>