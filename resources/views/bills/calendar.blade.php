
<body background="https://i.ytimg.com/vi/szDwAEeGBrI/maxresdefault.jpg">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
@include('nav');

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
           {!! Form::open(array('route' => 'bills.add','method'=>'POST','files'=>'true')) !!}
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
                  @if (Session::has('success'))
                     <div class="alert alert-success">{{ Session::get('success') }}</div>
                  @elseif (Session::has('warnning'))
                      <div class="alert alert-danger">{{ Session::get('warnning') }}</div>
                  @endif
              </div>

                <div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="form-group">
                    {{ Form::label('name', 'Nome') }}
                    {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
                    </div>
                </div>
             <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                  {!! Form::label('date','Data da conta:') !!}
                  <div class="">
                  {!! Form::date('date', null, ['class' => 'form-control']) !!}
                  {!! $errors->first('date', '<p class="alert alert-danger">:message</p>') !!}
                  </div>
                </div>
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
