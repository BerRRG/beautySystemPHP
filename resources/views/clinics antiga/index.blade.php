<!DOCTYPE html>
<html>
<head>
    <title>Beauty System - Consultórios</title>
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

<h1>Consultórios</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nome</td>
        </tr>
    </thead>
    <tbody>
    @foreach($clinics as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                {{ Form::open(array('url' => 'clinics/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Apagar', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}

               
                <a class="btn btn-small btn-success" href="{{ URL::to('clinics/' . $value->id) }}">Mostrar</a>


                <a class="btn btn-small btn-info" href="{{ URL::to('clinics/' . $value->id . '/edit') }}">Editar</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>