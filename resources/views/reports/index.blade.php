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
            <h4 class="title-reports">Relatório de vendas semanais</h4>
            <p class="caption-reports">Bernardo Generozo</p>
            <button class="btn btn-primary">Download</button>
        </div>
        <hr class="reports-bar">
        <div class="reports">
            <h4 class="title-reports">Relatório de vendas semanais</h4>
            <p class="caption-reports">Vai tomar </p>
            <button class="btn btn-primary">Download</button>
        </div>
            <hr class="reports-bar">
        <div class="reports">
            <h4 class="title-reports">Relatório de vendas semanais</h4>
            <p class="caption-reports">no seu cu</p>
            <button class="btn btn-primary">Download</button>
        </div>
        <hr class="reports-bar">
    </div>
</div>
</body>
</html>
