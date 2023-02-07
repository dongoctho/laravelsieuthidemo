<h1>Edit product</h1>
<?php if(isset($msg)): ?>
    <?php echo e($msg); ?>

<?php endif; ?>
<form action="" method="post">
    <?php echo csrf_field(); ?>
    <input type="text" name="nameproduct" value="<?php echo e($product->nameproduct); ?>">
    <input type="text" name="description" value="<?php echo e($product->description); ?>">
    <input type="submit" value="submit">
</form>
<?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/admin/product/show.blade.php ENDPATH**/ ?>