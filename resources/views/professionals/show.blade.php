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
        <a class="navbar-brand" href="{{ URL::to('professionals') }}">Professional</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('professionals') }}">View All Professionals</a></li>
        <li><a href="{{ URL::to('professionals/create') }}">Create a Professional</a>
    </ul>
</nav>

<h1>Showing {{ $professional->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $professional->name }}</h2>
        <p>
            <strong>Email:</strong> {{ $professional->email }}<br>
        </p>
    </div>

</div>
</body>
</html>