<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Profissional</title>
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
        <li><a href="{{ URL::to('professionals/create') }}">Adicionar profissional</a>
    </ul>
</nav>

<h1>Cadastro de Profissional</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::open(array('url' => 'professionals')) }}

    <div class="form-group">
        {{ Form::label('name', 'Nome') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('birth_date', 'Data de nascimento') }}
        {{ Form::text('birth_date', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('address', 'Endereço') }}
        {{ Form::text('address', null, array('class' => 'form-control')) }}
    </div>

     <div class="form-group">
        {{ Form::label('cep', 'CEP') }}
        {{ Form::text('cep', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('neighborhood', 'Bairro') }}
        {{ Form::text('neighborhood', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('city', 'Cidade') }}
        {{ Form::text('city', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('uf', 'Estado') }}
        {{ Form::text('uf', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('phone', 'Telefone') }}
        {{ Form::text('phone', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('celphone', 'Celular') }}
        {{ Form::text('celphone', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('occupation', 'Especialidade') }}
        {{ Form::text('occupation', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('marital_status', 'Estado civil') }}
        {{ Form::text('marital_status', null, array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Inserir', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

<br/>
</div>
</body>
</html>
