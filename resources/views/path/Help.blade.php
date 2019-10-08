@extends('layout.basic')
@section('content')
<link rel="canonical" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
</div>
@endsection