<form action="login" method="post">
<?php echo csrf_field(); ?>
<div>
    <label>Email Address</label>
    <input type="email" name="email" required>
</div>

<div>
    <label>Password</label>
    <input type="password" name="password" required>
</div>

<div>
    <button type="submit">Login</button>
</div>
</form><?php /**PATH C:\xampp\htdocs\miniproject\resources\views/Home.blade.php ENDPATH**/ ?>