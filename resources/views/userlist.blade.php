{{View:: make('title')}}


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




    <h2>User Account</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">

            @if(count($listofuser))
            <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Create Date</th>
                    <th>Updated Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($listofuser as $user)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><a href="/userview?rid={{ $user->id }}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{ $user->created_at ? date('D, d F Y',strtotime($user->created_at)) : 'N/A' }}</td>
                    <td>{{ $user->updated_at ? date('D, d F Y',strtotime($user->updated_at)) : 'N/A' }}</td>
                    <td><a href="/useredit?rid={{ $user->id }}">Edit</a>
                    <a href="/userdelete?rid={{ $user->id }}">Delete</a>
                    </td>

            

                </tr>
                @endforeach

                <style>
                        .h-5 {
                            height: 1em;
                        }
 
                        .flex {
                            text-align: center;
                            width: 100%;
                        }
 
                        .leading-5 {
                            padding: 0.8em;
                        }
 
                    </style>
                    <tr><td colspan=5>
                    {{ $listofuser->appends(['q' => Request::get('q')])->links() }}
                    </td></tr>
            </tbody>
            @else
            No Record Found
            @endif
</table>
<script src="js/bootstrap.bundle.min.js"></script>
</script>
</body>
</html>



