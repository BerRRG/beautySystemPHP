<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Profissional</title>
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
        <li><a href="{{ URL::to('professionals/create') }}">Adicionar profissionais</a>
    </ul>
</nav>

<h1>Detalhes do Profissional</h1>

    <div class="jumbotron text-left">
        <h2>{{ $professional->name }}</h2>
        <p>
	    <strong>Especialidade:</strong> {{ $professional->occupation }}<br>
	    <strong>Data de Nascimento:</strong> {{ $professional->birth_date }}<br>            
	    <strong>Email:</strong> {{ $professional->email }}<br>
	    <strong>Telefone:</strong> {{ $professional->phone }}<br>
	    <strong>Celular:</strong> {{ $professional->celphone }}<br>
	    <strong>Endereço:</strong> {{ $professional->address }}<br>
	    <strong>Bairro:</strong> {{ $professional->neighborhood }}<br>
	    <strong>CEP:</strong> {{ $professional->cep }}<br>
	    <strong>Cidade:</strong> {{ $professional->city }}<br>
	    <strong>Estado:</strong> {{ $professional->uf }}<br>
	    <strong>Estado civil:</strong> {{ $professional->marital_status }}<br>
        </p>
    </div>
    <div>    	
        <a class="btn btn-small btn-success" href="{{ URL::to('professionals') }}">Voltar</a>
    </div>
<br/>
</div>
</body>
</html>
