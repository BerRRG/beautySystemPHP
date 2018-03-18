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
        <a class="navbar-brand" href="{{ URL::to('treatments') }}">BEAUTY SYSTEM</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('treatments') }}">Tratamentos</a></li>
        <li><a href="{{ URL::to('treatments/create') }}">Adicionar Tratamento</a>
    </ul>
</nav>

<h1>Lista de Tratamentos</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Descrição</td>
        </tr>
    </thead>
    <tbody>
    @foreach($treatments as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->description }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                {{ Form::open(array('url' => 'treatments/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this Treatment', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}

               
                <a class="btn btn-small btn-success" href="{{ URL::to('treatments/' . $value->id) }}">Show this Treatment</a>


                <a class="btn btn-small btn-info" href="{{ URL::to('treatments/' . $value->id . '/edit') }}">Edit this Treatment</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>