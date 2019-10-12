@extends('layouts.basic')
@section('content')
<link rel="canonical" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
        <h3>Select Problem</h3>
        <select class='form-control'>
                <option value="Technical">Technical</option>
                <option value="Fraud">Fraud</option>
                <option value="Suggestion">Suggestion</option>
                <option value="Complain">Other</option>
      </select> 
      <br>
        <h3>Describe Problem in Brief</h3>
        <textarea class='form-control'></textarea>
        <br>
        <button type="submit" class='form-control btn btn-primary'>Submit</button>
@endsection