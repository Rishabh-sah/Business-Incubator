  
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
      {!!Form::open(['action'=>'AddsController@store','method'=>'POST'])!!}
      {{Form::label('Pname','Name')}}
      {{Form::text('Pname','',['class'=>'form-control','placeholder'=>'Property Name'])}}
      <br />
      {{Form::label('Address','Location')}}
      {{Form::text('Address','',['class'=>'form-control','placeholder'=>'Location'])}}
      <br />
      {{Form::label('Area','Area')}}
      {{Form::number('Area','',['class'=>'form-control','placeholder'=>'Area in sq.ft'])}}
      <br />
      {{Form::label('Type','Type')}}<br>
      <select name="Type">
              <option value='rent'>Rent</option>
              <option value='sell'>Sell</option>
      </select>
      <br />
      {{Form::label('Price','Price')}}
      {{Form::number('Price','',['class'=>'form-control','placeholder'=>'Price'])}}
      
      <br />
      {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
      {!!Form::close()!!}
@endsection