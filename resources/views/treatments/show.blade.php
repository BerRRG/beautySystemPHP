<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Tratamento</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('/') }}">Home</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('treatments') }}">Listar tratamentos</a></li>
        <li><a href="{{ URL::to('treatments/create') }}">Adicionar tratamento</a>
    </ul>
</nav>

<h1>Detalhes do Tratamento</h1>

    <div class="jumbotron text-left">
        <h2>{{ $treatment->name }}</h2>
        <p>
            <strong>Descrição:</strong> {{ $treatment->description }}<br>
        </p>
    </div>
    <div>    	
        <a class="btn btn-small btn-success" href="{{ URL::to('treatments') }}">Voltar</a>
    </div>
<br/>
</div>
</body>
</html>
