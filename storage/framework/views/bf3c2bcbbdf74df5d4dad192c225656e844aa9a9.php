    
    <?php $__env->startSection('list-staff'); ?>

        <div class="card1">
            <div class="card-header">
              <h1 class="h1_themsp">Danh sách khách hàng</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table">
                <thead>
                <tr>
                              <th class="lids">ID</th>
                              <th class="lids">Mã khách hàng</th>
                              <th class="lids">Tên khách hàng</th>
                              <th class="lids">Địa chỉ</th>
                              <th class="lids">Số điện thoại</th>
                              <th class="lids">Email</th>
                              <th class="lids">Ngày tạo</th>
                              <th class="lids">Sửa</th>
                              <th class="lids">Xóa</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                          <td class="lids1"><?php echo e($client->id); ?></td>
                          <td class="lids1"><?php echo e($client->code); ?></td>
                          <td class="lids1"><?php echo e($client->name); ?></td>
                          <td class="lids1"><?php echo e($client->address); ?></td>
                          <td class="lids1"><?php echo e($client->phone); ?></td>
                          <td class="lids1"><?php echo e($client->email); ?></td>
                          <td class="lids1"><?php echo e($client->created_at); ?></td>
                          <td class="lids1"><a href="<?php echo e(route('show-client', ['id'=>$client->id])); ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                          <td class="lids1"><a onclick="return confirm('Ban co chac muon xoa?')" href="<?php echo e(route('delete-client', ['id'=>$client->id])); ?>"><i class="fa-solid fa-trash"></i></a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

              </table>
            </div>

            <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/admin/client/list-client.blade.php ENDPATH**/ ?>