@extends('master')
  @section('title', 'Inicio')
  @section('content')  

    <!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">Portfolio
        <small>Trayectoria profesional</small>
      </h1>

      <h3 class="my-4">Sobre mi</h3>

      <div class="row">
        <div class="col-md-6 col-sm-6 mb-4">
          <p>Datos de interés y contacto</p>
          <ul>
            <li>Nombre completo: <strong>Victoriano Sevillano Vega</strong></li>
            <li>Correo electrónico: <strong>victorianosevillano@gmail.com</strong></li>
            <li>Carnet de conducir: <strong>B1</strong></li>
            <li>Teléfono de contacto: <strong>647742589</strong></li>
            <li>Fecha de nacimiento: <strong>27 de Abril de 1991</strong></li>
          </ul>
        </div>
        <div class="col-md-6 col-sm-6 mb-4 text-center" >
          <a href="#">
            <img class="img-circle" src="//192.168.0.103/web/public/img/vsevillano.jpg" alt="">
          </a>
        </div>



      </div>


      <!-- Portfolio Item Row -->
      <div class="row">

      <div class="col-md-6">
          <h3 class="my-3">Administración de sistemas</h3>
          <p>Por una parte, cuento con el título de técnico superior en "Administración de sistemas informáticos en red (ASIR)", cursado en el I.E.S. Gran Capitán de Córdoba.</p>
          <h3 class="my-3">Formación en centros de trabajo</h3>
          <ul>
            <li>Universidad Loyola de Andalucía</li>
          </ul>
          <h3 class="my-3">Projecto final de ciclo</h3>
          <ul>
            <li>Migración de moodle del IES</li>
          </ul>
          <h3 class="my-3">Principales competencias</h3>
          <span>Administración de sistemas</span> 
          <div class="progress progress-striped active">  
          <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
               <span class="sr-only">95% completado</span>
            </div>
          </div>
          <span>Servidores web</span> 
          <div class="progress progress-striped active">  
          <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
               <span class="sr-only">65% completado</span>
            </div>
          </div>
          <span>Virtualizacion</span> 
          <div class="progress progress-striped active">  
          <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
               <span class="sr-only">75% completado</span>
            </div>
          </div>
          <span>Active Directory</span> 
          <div class="progress progress-striped active">  
          <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
               <span class="sr-only">55% completado</span>
            </div>
          </div>
          <span>Bases de datos</span> 
          <div class="progress progress-striped active">  
          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
               <span class="sr-only">60% completado</span>
            </div>
          </div>
      </div>

      <div class="col-md-6">
          <h3 class="my-3">Desarrollo de aplicaciones web</h3>
          <p>Por otra parte, cuento con el título de técnico superior en "Desarrollo de aplicaciones web (DAW)", cursado también en el I.E.S. Gran Capitán de Córdoba.</p>
          <h3 class="my-3">Formación en centros de trabajo</h3>
          <ul>
            <li>S.G.C Online (tablondeanuncios.com)</li>
          </ul>
          <h3 class="my-3">Projecto final de ciclo</h3>
          <ul>
            <li>Reparto FCT/PI 2.0</li>
          </ul>
          <h3 class="my-3">Principales competencias</h3>
          <span>Desarrollo MVC</span> 
          <div class="progress progress-striped active">  
          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
               <span class="sr-only">60% completado</span>
            </div>
          </div>
          <span>Backend</span> 
          <div class="progress progress-striped active">  
          <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
               <span class="sr-only">85% completado</span>
            </div>
          </div>
          <span>Frontend</span> 
          <div class="progress progress-striped active">  
          <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
               <span class="sr-only">50% completado</span>
            </div>
          </div>
          <span>CMS</span> 
          <div class="progress progress-striped active">  
          <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
               <span class="sr-only">70% completado</span>
            </div>
          </div>
          <span>Symfony</span> 
          <div class="progress progress-striped active">  
          <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
               <span class="sr-only">75% completado</span>
            </div>
          </div>
      </div>

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Últimos proyectos</h3>

      <div class="row" id="proyectos-recientes">

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-thumbnail" src="//192.168.0.103/web/public/img/Symfony_logo.png" alt="">
          </a>
          <center><span>Reparto FCT/PI 2.0</span></center>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-thumbnail" src="//192.168.0.103/web/public/img/Laravel.svg.png" alt="">
          </a>
          <center><span>Web vsevillano</span></center>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-thumbnail" src="//192.168.0.103/web/public/img/vagrant.png" alt="">
          </a>
          <center><span>Web vsevillano</span></center>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-thumbnail" src="//192.168.0.103/web/public/img/GitHub.png" alt="">
          </a>
          <center><span>Otros proyectos</span></center>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->


@endsection