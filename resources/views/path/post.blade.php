@extends('layouts.app')
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
        <h1>Properties</h1>
        @if(count($adds)>0)
        
        <div class='card'>
            <div class='container'>
            <h3>{{$adds->Pname}}</a></h3>
            <h5>Price= {{$adds->Price}} ({{$adds->Type}})</h5><h5>Location={{$adds->Address}}</h5><h5>Area of Land(in Sq.Ft)={{$adds->Area}}</h5>
             
        </div>
        </div>
        <br>
        
        @else
        <p>No Properties Found</p>
        @endif
        <div>
        <button class='btn btn-default' onclick="location.href='/properties'">Go Back</button>
        </div>
@endsection 