  
@extends('layouts.app')

@section('content')
    <h1>Edit Info</h1>
    {!!Form::open(['action'=>['AddsController@update',$adds->id],'method'=>'POST'])!!}
      {{Form::label('Pname','Name')}}
      {{Form::text('Pname',$adds->Pname,['class'=>'form-control','placeholder'=>'Property Name'])}}
      <br />
      {{Form::label('Address','Location')}}
      {{Form::text('Address',$adds->Address,['class'=>'form-control','placeholder'=>'Location'])}}
      <br />
      {{Form::label('Area','Area')}}
      {{Form::number('Area',$adds->Area,['class'=>'form-control','placeholder'=>'Area in sq.ft'])}}
      <br />
      {{Form::label('Type','Type')}}<br>
      <select name="Type">
              <option value='rent'>Rent</option>
              <option value='sell'>Sell</option>
      </select>
      <br />
      {{Form::label('Price','Price')}}
      {{Form::number('Price',$adds->Price,['class'=>'form-control','placeholder'=>'Price'])}}
      
      <br />
      {{Form::hidden('_method','PUT')}}
      {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
      {!!Form::close()!!}
@endsection