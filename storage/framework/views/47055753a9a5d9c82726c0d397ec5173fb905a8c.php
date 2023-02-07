<h1>Login</h1>
<form method="post" action="">
    <?php echo csrf_field(); ?>
    <input type="text" name="email" placeholder="Enter email">
    <input type="password" name="password" placeholder="Enter password">
    <input type="submit" value="Login">
</form>
<?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/admin/login.blade.php ENDPATH**/ ?>