@extends('header')
@section('login')
{{View:: make('title')}}


<main class="form-signin w-200 m-auto">
    <form action="login" method="post">@csrf
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
{{View:: make('footer')}}
@endsection
