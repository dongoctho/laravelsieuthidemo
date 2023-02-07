<h1>Category list</h1>

<style>
    table, th, td {
      border:1px solid black;
    }
    </style>
    <table style="width:100%">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Created at</th>
        <th></th>
      </tr>
      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($category->id); ?>

        <td><?php echo e($category->name); ?></td>
        <td><?php echo e($category->description); ?></td>
        <td><?php echo e($category->created_at); ?></td>
        <td><a href="<?php echo e(route('show-category', ['id'=>$category->id])); ?>">Edit</a></td>
        <td><a onclick="return confirm('Ban co chac muon xoa?')" href="<?php echo e(route('delete-category', ['id'=>$category->id])); ?>">Delete</a></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/admin/category/list.blade.php ENDPATH**/ ?>