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
<body>
      {!!Form::open(['action'=>['SearchsController@index'],'method'=>'GET'])!!}
      {{Form::label('Address','Location')}}
      {{Form::text('Address','',['class'=>'form-control','placeholder'=>'Location'])}}
      <br />
      {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
      {!!Form::close()!!}
    </div >
@endsection