@extends('layouts.basic')
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
        <br>
        <h1>Properties</h1>
        @if(count($adds)>0)
        @foreach($adds as $add)
        <div class='card'>
            <div class='container'>
            <h3><a href='/properties/{{$add->id}}'>{{$add->Pname}}</a></h3>
            <h5>Price= {{$add->Price}} ({{$add->Type}})</h5><h5>Location={{$add->Address}}</h5><h5>Area of Land(in Sq.Ft)={{$add->Area}}</h5>
        </div>
        </div>
        <br>
        @endforeach
        {{$adds->links()}}
        @else
        <p>No Properties Found</p>
        @endif
        <div>

@endsection
 