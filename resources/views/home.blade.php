  @extends('master')
  @section('title', '| Inicio')
  @section('content')  

  <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('img/binary.jpg')">
            <div class="carousel-caption">
              <h3>Administración de sistemas informáticos</h3>
              <p>En Vsevillano podrás encontrar mucho sobre la administración de sistemas.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/code.jpg')">
            <div class="carousel-caption">
              <h3>Desarrollo web</h3>
              <p>También podrás encontrar información sobre desarrollo backend y frontend.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/service.jpg')">
            <div class="carousel-caption">
              <h3>Y mucho más</h3>
              <p>Podrás encontrar información a cerca de mi, trabajos, proyectos, además de otros temas de interes.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4">Bienvenid@ a vsevillano.es</h1>

      <!-- Features Section -->
      <div class="row">
        <div class="col-lg-6">
          
          <p>Hablaremos de temas relacionados con:</p>
          <ul>
            <li>
              <strong>Desarrollo web</strong>
            </li>
            <li>
              <strong>Administración de sistemas</strong>
            </li>
          </ul>
          <p>Tocaremos aspectos sobre:</p>
          <ul>
            <li>jQuery</li>
            <li>Ajax</li>
            <li>Bootstrap</li>
            <li>Vagrant</li>
            <li>Docker</li>
          </ul>
          <p>Y mucho más, estos solo son algunos de mis temas preferidos, aunque abordaremos todo tipo de lenguajes y servicios.</p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="img/technology.jpg" alt="">
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p>Como recomendación personal, te sugiero echar un vistazo al blog de esta web, donde podrás encontrar todos los posts relacionados con los temas anteriores.</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="blog">Visitar blog</a>
        </div>
      </div>

    </div>
    <!-- /.container -->




@endsection
