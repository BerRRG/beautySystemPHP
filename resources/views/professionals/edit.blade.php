<!DOCTYPE html>
<html>
<head>
    <title>Editar Profissional</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('/') }}">Home</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('professionals') }}">Listar profissionais</a></li>
        <li><a href="{{ URL::to('professionals/create') }}">Adicionar profissional</a>
    </ul>
</nav>

<h1>Edit {{ $professional->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($professional, array('route' => array('professionals.update', $professional->id), 'method' => 'PUT')) }}

@include('professionals.form')
{{ Form::submit('Inserir alterações', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

<br/>
</div>
</body>
</html>
