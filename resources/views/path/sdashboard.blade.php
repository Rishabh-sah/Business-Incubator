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
        <br>
        <div>
        <button class='btn btn-primary' onclick="location.href='/properties'">SHOW PROPERTY</button>
        <button type="submit" class='btn btn-danger float-right'>DELETE PROPERTY</button>
</div>
@endsection