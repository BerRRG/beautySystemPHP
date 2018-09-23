<!DOCTYPE html>
<html>
<head>
    <title>Editar calendarioe</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('/') }}">Home</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('calendario') }}">Listar calendarioes</a></li>
    </ul>
</nav>

<h1>Editar calendario:  {{ $calendar->start_date }} até {{$calendar->end_date}}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($calendar, array('route' => array('calendario.update', $calendar->id), 'method' => 'PUT')) }}

@include('calendars.form')

{{ Form::submit('Inserir alterações', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
