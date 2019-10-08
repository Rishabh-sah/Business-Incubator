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
<body>
    <form action="action_page.php" method="post" class='form-signin'>
                    <h1>Register</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <label for="name"><b>Name</b></label>
                    <input type="text" placeholder="Enter name" class='form-control' name="name" required>
                    <label for="phone"><b>Contact</b></label>
                    <input type="tel" placeholder="Enter phone " class='form-control' name="phone" required>  
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" class='form-control' name="email" required>
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" class='form-control' name="psw" required>
                    <label for="psw-repeat"><b>Re-Enter Password</b></label>
                    <input type="password" placeholder="Repeat Password" class='form-control' name="psw-repeat" required>
                    <div><b>User Type</b></div>
                    <select class='form-control'>
                            <option value="buyer">BUYER</option>
                            <option value="seller">SELLER</option>
                          </select>
                    <p>By clicking register you agree to our <a href="#">Terms & Conditions</a>.</p>
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Register</button>
                  </div>
                  <hr>
      </form>
      <div class="container signin">
        <br>
      <p>Already have an account?</p>
      <a href='/login'>Login</a>
@endsection