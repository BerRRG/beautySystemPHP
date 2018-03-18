<!DOCTYPE html>
<html>
<head>
    <title>Show Blade</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('clinics') }}">Clinic</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('clinics') }}">View All Clinic</a></li>
        <li><a href="{{ URL::to('clinics/create') }}">Create a Clinic</a>
    </ul>
</nav>

<h1>Showing {{ $clinic->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $clinic->name }}</h2>
        <p>
            <strong>Email:</strong> {{ $clinic->email }}<br>
        </p>
    </div>

</div>
</body>
</html>