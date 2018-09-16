<body background="https://i.ytimg.com/vi/szDwAEeGBrI/maxresdefault.jpg">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('/clients') }}">Clientes</a>
        <a class="navbar-brand" href="{{ URL::to('/clinics') }}">Consultorios</a>
        <a class="navbar-brand" href="{{ URL::to('/professionals') }}">Profissionais</a>
        <a class="navbar-brand" href="{{ URL::to('/treatments') }}">Tratamentos</a>
    </div>
    <ul class="nav navbar-nav">
    </ul>
</nav>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

<!-- Scripts -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

{!! $calendar_details->script() !!}

<div class="container">
    <div class="panel panel-primary">
     <div class="panel-heading">Calendario</div>
      <div class="panel-body">
           {!! Form::open(array('route' => 'events.add','method'=>'POST','files'=>'true')) !!}
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
                  @if (Session::has('success'))
                     <div class="alert alert-success">{{ Session::get('success') }}</div>
                  @elseif (Session::has('warnning'))
                      <div class="alert alert-danger">{{ Session::get('warnning') }}</div>
                  @endif
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <div class="">
                    {!! Form::label('full_day','Dia Inteiro:') !!}
                    {!! Form::checkbox('full_day', 1) !!}
                    </div>
                </div>
              </div>
              <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                  {!! Form::label('start_date','Data de inicio:') !!}
                  <div class="">
                  {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
                  {!! $errors->first('start_date', '<p class="alert alert-danger">:message</p>') !!}
                  {!! Form::time('start_time',null, ['class' => 'form-control']) !!}
                  {!! $errors->first('start_time', '<p class="alert alert-danger">:message</p>') !!}
                  </div>
                </div>
              </div>
              <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                  {!! Form::label('end_date','Data de fim:') !!}
                  <div class="">
                  {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
                  {!! $errors->first('end_date', '<p class="alert alert-danger">:message</p>') !!}
                  {!! Form::time('end_time',null, ['class' => 'form-control']) !!}
                  {!! $errors->first('end_time', '<p class="alert alert-danger">:message</p>') !!}
                  </div>
                </div>
              </div>

              <div class="col-xs-3 col-sm-3 col-md-3">
                {!! Form::label('treatment_id','Tratamentos:') !!}
                {!! Form::select('treatment_id', $treatments, [], ['class' => 'form-control']) !!}
                 {!! $errors->first('treatment_id', '<p class="alert alert-danger">:message</p>') !!}
              </div>

              <div class="col-xs-3 col-sm-3 col-md-3">
                {!! Form::label('client_id','Clientes:') !!}
                {!! Form::select('client_id', $clients, [], ['class' => 'form-control']) !!}
                 {!! $errors->first('client_id', '<p class="alert alert-danger">:message</p>') !!}
              </div>
              <div class="col-xs-3 col-sm-3 col-md-3">
                {!! Form::label('professional_id','Profissionais:') !!}
                {!! Form::select('professional_id', $professionals, [], ['class' => 'form-control']) !!}
                 {!! $errors->first('professional_id', '<p class="alert alert-danger">:message</p>') !!}
              </div>
              <div class="col-xs-3 col-sm-3 col-md-3">
                {!! Form::label('clinic_id','Sala:') !!}
                {!! Form::select('clinic_id', $clinics, [], ['class' => 'form-control']) !!}
                {!! $errors->first('clinic_id', '<p class="alert alert-danger">:message</p>') !!}
              </div>
              <div class="col-xs-1 col-sm-1 col-md-1 text-center"> &nbsp;<br/>
              {!! Form::submit('Adicionar',['class'=>'btn btn-primary']) !!}
              </div>
            </div>
           {!! Form::close() !!}
     </div>
    </div>
    <div class="panel panel-primary">
      <div class="panel-heading">Detalhes</div>
      <div class="panel-body" >
          {!! $calendar_details->calendar() !!}
      </div>
    </div>
    </div>
</body>
