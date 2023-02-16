<?php echo e(session()->get('user')->email); ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Premium League Football</title>  
    <Link rel="icon" href="plLogo.png">
    </head>
  

<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

<link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Premium League</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="/logout">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" style="color:black;">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/userlist" style="color:black;">
              <span data-feather="file" class="align-text-bottom"></span>
              Administrator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:black;">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Fixtures
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:black;">
              <span data-feather="users" class="align-text-bottom"></span>
              Stats Centre
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:black;">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Clubs
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:black;">
              <span data-feather="layers" class="align-text-bottom"></span>
              Integrations
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report" style="color:black;">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:black;">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:black;">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:black;">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:black;">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>
        </div>
      </div>

      <div class="p-5 mb-4 bg-light rounded-3" style="background-image: url(img/jk.jpg);" >
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold" style="color: white;"></h1>
          <p class="col-md-8 fs-4"></p>
          <button class="btn btn-primary btn-lg" type="button">Watch</button>
        </div>
      </div>
      <div class="row align-items-md-stretch">
        <div class="col-md-6">
          <div class="h-100 p-5 text-bg-dark rounded-3" style="background-image: url('img/lk.jpg');">
            <h2></h2>
            <p></p>
            <button class="btn btn-outline-light" type="button">View</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="h-100 p-5 bg-light border rounded-3" style="background-image: url('img/mn.jpg');">
            <h2 style="color:black;">Talk Sport</h2>
            <p style="color: black;">Chelsea announce $88m signing of Arsenal target Mudryk, Leeds smash transfer record.</p>
            <button class="btn btn-outline-secondary" type="button" style="color: black;">Read More</button>
          </div>
        </div>
      <h2>Matches</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Arsenal</td>
              <td>2</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Spurs</td>
              <td>0</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Wolves</td>
              <td>1</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>West Ham</td>
              <td>0</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Nottm Forest</td>
              <td>2</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Leicester City</td>
              <td>0</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Brentford</td>
              <td>2</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Bournemouth</td>
              <td>0</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Chelsea</td>
              <td>1</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Crytal Palace</td>
              <td>0</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\miniproject\resources\views/menu.blade.php ENDPATH**/ ?>