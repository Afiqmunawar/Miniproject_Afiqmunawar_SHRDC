<?php echo e(View:: make('title')); ?>

<main class="form-signin w-100 m-auto">
<form action="/register" method="post"><?php echo csrf_field(); ?>
<img class="mb-4" src="img/plLogo.png" alt="" width="300" height="300">

<link rel="stylesheet" href="css/sign-in.css">

        <h1 class="h3 mb-3 fw-normal;">Register here</h1>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name="fullname" placeholder="Full Name" required>
            <label for="floatingInput">Full Name</label>
        </div>
       
        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="email address" required>
            <label for="floatingInput">Email</label>
        </div>

        <div class="form-floating">
            <input type="password" class="form-control" id="floatingInput" name="password" placeholder="Password">
            <label for="floatingInput">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
</form>
</main>
<?php echo e(View:: make('footer')); ?><?php /**PATH C:\xampp\htdocs\miniproject\resources\views/register.blade.php ENDPATH**/ ?>