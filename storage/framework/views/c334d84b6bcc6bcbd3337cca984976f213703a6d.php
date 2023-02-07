<?php echo $__env->make('admin.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('admin.inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="card1">
        <div class="card-header">
          <h1 class="h1_themsp">Danh sách hàng hóa</h1>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table">
            <thead>
            <tr>
                          <th class="lids">ID</th>
                          <th class="lids">Mã hàng hóa</th>
                          <th class="lids">Tên hàng hóa</th>
                          <th class="lids">Mô tả</th>
                          <th class="lids">Thông tin bảo hành</th>
                          <th class="lids">Nhà sản xuất</th>
                          <th class="lids">Số lượng</th>
                          <th class="lids">Đơn vị tính</th>
                          <th class="lids">Danh mục</th>
                          <th class="lids">Created at</th>
                          <th class="lids">Sửa</th>
                          <th class="lids">Xóa</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $hanghoas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hanghoa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                      <td class="lids1"><?php echo e($hanghoa->id); ?></td>
                      <td class="lids1"><?php echo e($hanghoa->mahanghoa); ?></td>
                      <td class="lids1"><?php echo e($hanghoa->tenhanghoa); ?></td>
                      <td class="lids1"><?php echo e($hanghoa->mota); ?></td>
                      <td class="lids1"><?php echo e($hanghoa->thongtinbaohanh); ?></td>
                      <td class="lids1"><?php echo e($hanghoa->soluong); ?></td>
                      <td class="lids1"><?php echo e($hanghoa->donvitinh); ?></td>
                      <td class="lids1"><?php echo e($hanghoa->nhasx); ?></td>
                      <td class="lids1"><?php echo e($hanghoa->danhmuc); ?></td>
                      <td class="lids1"><?php echo e($hanghoa->created_at); ?></td>
                      <td class="lids1"><a href="<?php echo e(route('show-hanghoa', ['id'=>$hanghoa->id])); ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                      <td class="lids1"><a onclick="return confirm('Ban co chac muon xoa?')" href="<?php echo e(route('delete-hanghoa', ['id'=>$hanghoa->id])); ?>"><i class="fa-solid fa-trash"></i></a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

          </table>
        </div>
<?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/admin/hanghoa/list.blade.php ENDPATH**/ ?>