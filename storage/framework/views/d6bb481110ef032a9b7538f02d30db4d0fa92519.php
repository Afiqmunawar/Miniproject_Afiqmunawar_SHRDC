
<?php $__env->startSection('login'); ?>
<?php echo e(View:: make('title')); ?>



<main class="form-signin w-200 m-auto">
    <form action="login" method="post"><?php echo csrf_field(); ?>
    <img class="mb-4" src="img/plLogo.png" alt="" width="300" height="300">
   

    <link rel="stylesheet" href="css/sign-in.css">

    <h1 class="h3 mb-3 fw-normal;">Please Login</h1>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
      <label for="floatingInput">Email address</label>
    </div>

    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

    <div class="nav-item text-nowrap">
    <a class="nav-link px-3" href="/register">Signup</a>
    </div>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2023</p>
  </form>
</main>
<?php echo e(View:: make('footer')); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miniproject\resources\views/login.blade.php ENDPATH**/ ?>