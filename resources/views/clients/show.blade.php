<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Cliente</title>
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
        <li><a href="{{ URL::to('clients/create') }}">Adicionar clientes</a>
    </ul>
</nav>

<h1>Detalhes do Cliente</h1>

    <div class="jumbotron text-left">
        <h2>{{ $client->name }}</h2>
        <p>
	    <strong>Data de Nascimento:</strong> {{ $client->birth_date }}<br>            
	    <strong>Email:</strong> {{ $client->email }}<br>
	    <strong>Telefone:</strong> {{ $client->phone }}<br>
	    <strong>Celular:</strong> {{ $client->celphone }}<br>
	    <strong>Endereço:</strong> {{ $client->address }}<br>
	    <strong>Bairro:</strong> {{ $client->neighborhood }}<br>
	    <strong>CEP:</strong> {{ $client->cep }}<br>
	    <strong>Cidade:</strong> {{ $client->city }}<br>
	    <strong>Estado:</strong> {{ $client->uf }}<br>
	    <strong>Trabalho:</strong> {{ $client->occupation }}<br>
	    <strong>Estado civil:</strong> {{ $client->marital_status }}<br>
        </p>
    </div>
    <div>    	
        <a class="btn btn-small btn-success" href="{{ URL::to('clients') }}">Voltar</a>
    </div>
<br/>
</div>
</body>
</html>
