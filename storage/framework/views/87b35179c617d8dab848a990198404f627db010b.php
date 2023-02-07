<?php $__env->startSection('list-cart'); ?>

    <div class="card1">
        <div class="card-header">
          <h1 class="h1_themsp">GIỎ HÀNG</h1>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table" style="margin-top: 50px">
            <thead>
            <tr>
                          <th class="lids"></th>
                          <th class="lids">Tên sản phẩm</th>
                          <th class="lids">Đơn giá</th>
                          <th class="lids">Số lượng</th>
                          <th class="lids">Tổng giá</th>
                          <th class="lids">Thanh toán</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                      <td class="lids1"><img src="<?php echo e(asset('uploads/'.$cart->file_upload)); ?>" width="50px" height="35px" alt="error"></td>
                      <td class="lids1"><?php echo e($cart->name); ?></td>
                      <td class="lids1"><?php echo e($cart->price); ?></td>
                      <td class="lids1"><?php echo e($cart->amount); ?></td>
                      <td class="lids1"><?php echo e($cart->total); ?></td>
                      <td class="lids1"><a href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>

        <?php $__env->stopSection(); ?>

<?php echo $__env->make('index.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/admin/order/cart.blade.php ENDPATH**/ ?>