<!DOCTYPE html>
<html>
<head>
    <title>Relatórios</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    @include('nav');
</head>
<body>
<div class="container">
    
    <p class="title">Baixar relatórios</p>
    <hr>
    <!-- <a class="btn btn-primary caption menu" href="{{ URL::to('clinics') }}">Listar consultórios</a> -->

    <div class="panel panel-primary panel-reports">
        <p class="reports-title">Tipos de relatórios</p>
        <hr class="reports-bar">
        <div class="reports">
            <h4 class="title-reports">Relatório de profissionais</h4>
            {{ Form::open(array('url' => '/professional-reports', 'class' => 'btn')) }}
                {{ Form::hidden('_method', 'GET') }}
                {{ Form::submit('Download', array('class' => 'btn btn-primary')) }}
            {{ Form::close() }}
        </div>
        <hr class="reports-bar">
        <div class="reports">
            <h4 class="title-reports">Relatório de profissionais semanal</h4>
            {{ Form::open(array('url' => '/professional-week-reports', 'class' => 'btn')) }}
                {{ Form::hidden('_method', 'GET') }}
                {{ Form::submit('Download', array('class' => 'btn btn-primary')) }}
            {{ Form::close() }}
        </div>
            <hr class="reports-bar">
        <div class="reports">
            <h4 class="title-reports">Relatório de profissionais mensal</h4>
            {{ Form::open(array('url' => '/professional-month-reports', 'class' => 'btn')) }}
                {{ Form::hidden('_method', 'GET') }}
                {{ Form::submit('Download', array('class' => 'btn btn-primary')) }}
            {{ Form::close() }}
        </div>
        <hr class="reports-bar">
    </div>
</div>
</body>
</html>
