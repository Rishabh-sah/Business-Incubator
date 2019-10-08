@extends('layout.basic')
@section('content')
<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
   
</head>
<body>
    <div class='container'>
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link float-right" href="#">User</a>
                    </li>
                </ul>
              </nav>
    <form action="search" method="post">

            <div class="container">
                        
                    <h1>Enter the details for required property</h1>
                    <label for="address"><b>Address</b></label>
                    <input type="text" placeholder="Enter locality" class='form-control' name="address" required>
                    <label for="area"><b>Area of plot requied</b></label>
                    <input type="number" placeholder="Enter Area in Sq.Ft " class='form-control' name="area" required>
                    <input type="radio" name="type"value="rent" checked>Rent<br>
                    <input type="radio" name="type" value="buy">Buy<br> 
                    <label for="budget"><b>Budget</b></label>
                    <input type="number" placeholder="Enter Budget" class='form-control' name="budget" required>
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Search</button>
                  </div>
                  <hr>
      </form>
    </div >
@endsection