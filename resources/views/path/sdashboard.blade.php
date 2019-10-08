@extends('layout.basic')
@section('content')
<link rel="canonical" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
<body >
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
        <br>
      <table style="width:100%">
            <tr>
              <th>Propertyname</th>
              <th>Address</th>
              <th>Type</th>
              <th>Price</th>
              <th>Area</th>
              <th>Status</th>
            </tr>
            <tr>
              <td>Shiv Tapasya</td>
              <td>Borivali</td>
              <td>Rent</td>
              <td>1500</td>
              <td>1500</td>
              <td>pending</td>
            </tr>
        </table>
        <div>
        <button class='btn btn-primary' onclick="location.href='/seller/addproperty'">ADD PROPERTY</button>
        <button type="submit" class='btn btn-danger float-right'>DELETE PROPERTY</button>
        </div>
</div>
@endsection 