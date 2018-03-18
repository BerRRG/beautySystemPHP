<!DOCTYPE html>
<html>
<head>
    <title>Inserir Consultório</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('clinics') }}">LISTA DE CONSULTÓRIOS</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('clinics') }}">Listar</a></li>
        <li><a href="{{ URL::to('clinics/create') }}">Adicionar</a>
    </ul>
</nav>

<h1>Cadastro de Consultórios</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::open(array('url' => 'clinics')) }}

    <div class="form-group">
        {{ Form::label('name', 'Nome') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Inserir', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>