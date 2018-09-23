<nav class="navbar navbar-default sidebar" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header"></div>
      <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="logoMenu">
            <img src="{{ asset('img/logo.jpg') }}">
          </li>
          <li >
            <a href="{{ URL::to('/') }}">Inicio<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a>
          </li> 
          <li >
            <a href="{{ URL::to('/calendario') }}">Calendário<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-list-alt"></span></a>
          </li>  
          <li >
            <a href="{{ URL::to('/clients') }}">Clientes<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
          </li>  
          <li >
            <a href="{{ URL::to('/clinics') }}">Consultórios<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a>
          </li>  
          <li >
            <a href="{{ URL::to('/professionals') }}">Profissionais<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-heart-empty"></span></a>
          </li>  
          <li >
            <a href="{{ URL::to('/treatments') }}">Tratamentos<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-book"></span></a>
          </li>       
                 
          <li >
            <a href="#">Relatórios<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tasks"></span></a>
          </li>
          <li >
            <a href="#">Estoque<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a>
          </li>
      </ul>
    </div>
  </div>
</nav>