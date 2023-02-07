    
    <?php $__env->startSection('list-danhmuc'); ?>

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
                              <th class="lids">Mã danh mục</th>
                              <th class="lids">Tên danh mục</th>
                              <th class="lids">Mô tả</th>
                              <th class="lids">Created at</th>
                              <th class="lids">Sửa</th>
                              <th class="lids">Xóa</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                          <td class="lids1"><?php echo e($category->id); ?></td>
                          <td class="lids1"><?php echo e($category->code); ?></td>
                          <td class="lids1"><?php echo e($category->name); ?></td>
                          <td class="lids1"><?php echo e($category->description); ?></td>
                          <td class="lids1"><?php echo e($category->created_at); ?></td>
                          <td class="lids1"><a href="<?php echo e(route('show-category', ['id'=>$category->id])); ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                          <td class="lids1"><a onclick="return confirm('Ban co chac muon xoa?')" href="<?php echo e(route('delete-category', ['id'=>$category->id])); ?>"><i class="fa-solid fa-trash"></i></a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

              </table>
            </div>

            <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/admin/category/list-category.blade.php ENDPATH**/ ?>