    
    <?php $__env->startSection('list-producer'); ?>

        <div class="card1">
            <div class="card-header">
              <h1 class="h1_themsp">Danh sách nhà cung cấp</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table">
                <thead>
                <tr>
                              <th class="lids">ID</th>
                              <th class="lids">Mã nhà cung cấp</th>
                              <th class="lids">Tên nhà cung cấp</th>
                              <th class="lids">Số điện thoại</th>
                              <th class="lids">Email</th>
                              <th class="lids">Địa chỉ</th>
                              <th class="lids">Created at</th>
                              <th class="lids">Sửa</th>
                              <th class="lids">Xóa</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $producers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                          <td class="lids1"><?php echo e($producer->id); ?></td>
                          <td class="lids1"><?php echo e($producer->code); ?></td>
                          <td class="lids1"><?php echo e($producer->name); ?></td>
                          <td class="lids1"><?php echo e($producer->phone); ?></td>
                          <td class="lids1"><?php echo e($producer->email); ?></td>
                          <td class="lids1"><?php echo e($producer->address); ?></td>
                          <td class="lids1"><?php echo e($producer->created_at); ?></td>
                          <td class="lids1"><a href="<?php echo e(route('show-producer', ['id'=>$producer->id])); ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                          <td class="lids1"><a onclick="return confirm('Ban co chac muon xoa?')" href="<?php echo e(route('delete-producer', ['id'=>$producer->id])); ?>"><i class="fa-solid fa-trash"></i></a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

              </table>
            </div>

            <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/admin/producer/list-producer.blade.php ENDPATH**/ ?>