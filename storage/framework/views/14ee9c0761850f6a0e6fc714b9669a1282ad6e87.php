<?php $__env->startSection('list-order'); ?>

    <div class="card1">
        <div class="card-header">
          <h1 class="h1_themsp">Danh sách đơn hàng</h1>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table">
            <thead>
            <tr>
                          <th class="lids">ID</th>
                          <th class="lids">Tên khách hàng</th>
                          <th class="lids">Quốc gia/Khu vực</th>
                          <th class="lids">Tỉnh thành</th>
                          <th class="lids">Quận huyện</th>
                          <th class="lids">Địa chỉ</th>
                          <th class="lids">Số điện thoại</th>
                          <th class="lids">Địa chỉ Email</th>
                          <th class="lids">Ghi chú</th>
                          <th class="lids">Tên sản phẩm</th>
                          <th class="lids">Đơn giá</th>
                          <th class="lids">Số lượng</th>
                          <th class="lids">Mã giảm giá</th>
                          <th class="lids">Tổng giá</th>
                          <th class="lids">Phương thức thanh toán</th>
                          <th class="lids">Created at</th>
                          <th class="lids">Sửa</th>
                          <th class="lids">Hoàn thành</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                      <td class="lids1"><?php echo e($order->id); ?></td>
                      <td class="lids1"><?php echo e($order->name." ".$order->surname); ?></td>
                      <td class="lids1"><?php echo e($order->country); ?></td>
                      <td class="lids1"><?php echo e($order->city); ?></td>
                      <td class="lids1"><?php echo e($order->district); ?></td>
                      <td class="lids1"><?php echo e($order->address); ?></td>
                      <td class="lids1"><?php echo e($order->phone); ?></td>
                      <td class="lids1"><?php echo e($order->email); ?></td>
                      <td class="lids1"><?php echo e($order->description); ?></td>
                      <td class="lids1"><?php echo e($order->product_name); ?></td>
                      <td class="lids1"><?php echo e($order->price); ?></td>
                      <td class="lids1"><?php echo e($order->amount); ?></td>
                      <td class="lids1"><?php echo e($order->voucher); ?></td>
                      <td class="lids1"><?php echo e($order->total); ?></td>
                      <td class="lids1"><?php echo e($order->payment); ?></td>
                      <td class="lids1"><?php echo e($order->created_at); ?></td>
                      <td class="lids1"><a href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
                      <td class="lids1"><a onclick="return confirm('Đơn hàng đã được nhận?')" href="<?php echo e(route('delete-order', ['id'=>$order->id])); ?>"><i class="fa-solid fa-trash"></i></a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

          </table>
        </div>

        <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/admin/order/list-order.blade.php ENDPATH**/ ?>