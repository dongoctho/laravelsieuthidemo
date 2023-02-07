<h1>Add product</h1>
<?php if(isset($msg)): ?>
    <?php echo e($msg); ?>

<?php endif; ?>
<form action="" method="post">
    <?php echo csrf_field(); ?>
    <p>nhap ten</p>
    <input type="text" name="nameproduct">
    <p>nhap mo ta</p>
    <input type="text" name="description">
    <input type="submit" value="submit">
</form>
<?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/admin/product/add-product.blade.php ENDPATH**/ ?>