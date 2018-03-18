<!DOCTYPE html>
<html>
<head>
    <title>Beauty System</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('professionals') }}">BEAUTY SYSTEM</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('professionals') }}">Profissionais</a></li>
        <li><a href="{{ URL::to('professionals/create') }}">Adicionar Profissionais</a>
    </ul>
</nav>

<h1>Lista de Profissionais</h1>

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
            <td>Endereço</td>
            <td>Telefone</td>
            <td>Celular</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($professionals as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->address }}</td>
            <td>{{ $value->phone }}</td>
            <td>{{ $value->celphone }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                {{ Form::open(array('url' => 'professionals/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this Professional', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}

               
                <a class="btn btn-small btn-success" href="{{ URL::to('professionals/' . $value->id) }}">Show this Professional</a>


                <a class="btn btn-small btn-info" href="{{ URL::to('professionals/' . $value->id . '/edit') }}">Edit this Professional</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>