@extends('master')
  @section('title', '| Proyectos')
  @section('content')  
  <style>

    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
  <div class="container-fluid text-center">    
  <div class="row content">
    
    <div class="col-sm-10 text-justify"> 
      <h1>Proyectos</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      <div class="col-sm-4"> 
      <img src="img/vsevillano.jpg" alt="" class="center-block" style="border-radius: 50%">
      </div>
      <div class="col-sm-8 "> 
        <h3>Administrador de sistemas</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi officia impedit aut eligendi aliquam qui omnis placeat et, minus veritatis voluptates exercitationem ipsum sunt. Accusamus ipsum iure quaerat laboriosam similique!Facilis explicabo non consectetur nostrum necessitatibus sunt beatae eaque libero esse, ab consequuntur ex amet culpa ut voluptas suscipit maxime magni nobis minus corrupti, provident neque similique. Qui, iure vitae! </p>
        <div class="clearfix"></div>
        <h3>Desarrollador web</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi officia impedit aut eligendi aliquam qui omnis placeat et, minus veritatis voluptates exercitationem ipsum sunt. Accusamus ipsum iure quaerat laboriosam similique!Facilis explicabo non consectetur nostrum necessitatibus sunt beatae eaque libero esse, ab consequuntur ex amet culpa ut voluptas suscipit maxime magni nobis minus corrupti, provident neque similique. Qui, iure vitae! </p>
      </div>
      <div class="col-sm-10">
        <div class="clearfix"></div>
      </div>

    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>



@endsection