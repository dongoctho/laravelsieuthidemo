<h1>product list</h1>

<style>
    table, th, td {
      border:1px solid black;
    }
    </style>
    <table style="width:100%">
      <tr>
        <th>Id</th>
        <th>Name product</th>
        <th>Description</th>
        <th>Created at</th>
        <th></th>
      </tr>
      <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($products->id); ?>

        <td><?php echo e($products->nameproduct); ?></td>
        <td><?php echo e($products->description); ?></td>
        <td><?php echo e($products->created_at); ?></td>
        <td><a href="<?php echo e(route('show-product', ['id'=>$products->id])); ?>">Edit</a></td>
        <td><a onclick="return confirm('Ban co chac muon xoa?')" href="<?php echo e(route('delete-product', ['id'=>$products->id])); ?>">Delete</a></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/admin/product/list.blade.php ENDPATH**/ ?>