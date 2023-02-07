    
    <?php $__env->startSection('list-staff'); ?>

        <div class="card1">
            <div class="card-header">
              <h1 class="h1_themsp">Danh sách nhân viên</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table">
                <thead>
                <tr>
                              <th class="lids">ID</th>
                              <th class="lids">Mã nhân viên</th>
                              <th class="lids">Tên nhân viên</th>
                              <th class="lids">Địa chỉ</th>
                              <th class="lids">Số điện thoại</th>
                              <th class="lids">Email</th>
                              <th class="lids">Ngày tạo</th>
                              <th class="lids">Hình ảnh nhân viên</th>
                              <th class="lids">Sửa</th>
                              <th class="lids">Xóa</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $staffs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                          <td class="lids1"><?php echo e($staff->id); ?></td>
                          <td class="lids1"><?php echo e($staff->code); ?></td>
                          <td class="lids1"><?php echo e($staff->name); ?></td>
                          <td class="lids1"><?php echo e($staff->address); ?></td>
                          <td class="lids1"><?php echo e($staff->phone); ?></td>
                          <td class="lids1"><?php echo e($staff->email); ?></td>
                          <td class="lids1"><?php echo e($staff->created_at); ?></td>
                          <td class="lids1"><img src="<?php echo e(asset('uploads/'.$staff->file_upload)); ?>" width="50px" height="35px" alt="error"></td>
                          <td class="lids1"><a href="<?php echo e(route('show-staff', ['id'=>$staff->id])); ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                          <td class="lids1"><a onclick="return confirm('Ban co chac muon xoa?')" href="<?php echo e(route('delete-staff', ['id'=>$staff->id])); ?>"><i class="fa-solid fa-trash"></i></a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

              </table>
            </div>

            <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/admin/staff/list-staff.blade.php ENDPATH**/ ?>