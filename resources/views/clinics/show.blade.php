<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Consultório</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('/') }}">Home</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('clinics') }}">Listar consultórios</a></li>
        <li><a href="{{ URL::to('clinics/create') }}">Adicionar consultório</a>
    </ul>
</nav>

<h1>Detalhes do Consultório</h1>

    <div class="jumbotron text-left">
        <h2>{{ $clinic->name }}</h2>
        <p>
            <strong>Status: </strong> Liberado <br>
        </p>
    </div>
    <div>    	
        <a class="btn btn-small btn-success" href="{{ URL::to('clinics') }}">Voltar</a>
    </div>
<br/>
</div>
</body>
</html>
