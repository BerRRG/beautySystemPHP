<!DOCTYPE html>
<html>
<head>
    <title>Lista de Calendario</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('/') }}">Home</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('calendars') }}">Listar Calendario</a></li>
    </ul>
</nav>

<h1>Lista de Calendario</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nome do cliente</td>
            <td>Nome do profissional</td>
            <td>Sala</td>
            <td>Começo</td>
            <td>Fim</td>
            <td>Ações</td>
        </tr>
    </thead>
    <tbody>
    @foreach($calendars as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->client()->first()->name }}</td>
            <td>{{ $value->professional()->first()->name }}</td>
            <td>{{ $value->clinic()->first()->name }}</td>
            <td>{{ $value->start_date }}</td>
            <td>{{ $value->end_date }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>
                <div class="pull-right">
                    <a class="btn btn-small btn-success" href="{{ URL::to('calendario/' . $value->id) }}">Detalhar</a>

                    <a class="btn btn-small btn-info" href="{{ URL::to('calendario/' . $value->id . '/edit') }}">Editar</a>

                    {{ Form::open(array('url' => 'calendario/' . $value->id, 'class' => 'btn')) }}
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
