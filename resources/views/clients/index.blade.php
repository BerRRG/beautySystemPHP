<!DOCTYPE html>
<html>
<head>
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('/') }}">Home</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('clients') }}">Listar clientes</a></li>
        <li><a href="{{ URL::to('clients/create') }}">Adicionar cliente</a>
    </ul>
</nav>

<h1>Lista de Clientes</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Telefone</td>
            <td>Celular</td>
            <td>Ações</td>
        </tr>
    </thead>
    <tbody>
    @foreach($clients as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->phone }}</td>
            <td>{{ $value->celphone }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>
                <div class="pull-right">                   
                    <a class="btn btn-small btn-success" href="{{ URL::to('clients/' . $value->id) }}">Detalhar</a>

                    <a class="btn btn-small btn-info" href="{{ URL::to('clients/' . $value->id . '/edit') }}">Editar</a>

                    {{ Form::open(array('url' => 'clients/' . $value->id, 'class' => 'btn')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Apagar', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>
