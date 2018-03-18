<!DOCTYPE html>
<html>
<head>
    <title>Clinic</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('clinics') }}">Clinic</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('clinics') }}">View All Clinics</a></li>
        <li><a href="{{ URL::to('clinics/create') }}">Create a Clinic</a>
    </ul>
</nav>

<h1>Edit {{ $clinic->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($clinic, array('route' => array('clinics.update', $clinic->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the Clinic!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>