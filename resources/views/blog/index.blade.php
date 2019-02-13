@extends('master')
  @section('title', '| Blog')
  @section('content') 

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Blog
        <small>Vsevillano</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Blog</li>
      </ol>

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
          @foreach($posts as $post)
          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="img/{{$post->image}}" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">{{$post->title}} </h2>
              <p class="card-text">{{$post->resume}}</p>
              <a href="blog/post/{{$post->id}}" class="btn btn-primary">Seguir leyendo &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Publicado el dia {{$post->publish_date}} por
              <a href="#">Victoriano Sevillano</a>
            </div>
          </div>
          @endforeach

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Anterior</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Siguiente &rarr;</a>
            </li>
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card mb-4">
            <h5 class="card-header">Buscar</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Buscar...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Ir</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categorias</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Desarrollo web</a>
                    </li>
                    <li>
                      <a href="#">HTML</a>
                    </li>
                    <li>
                      <a href="#">CSS</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">JavaScript</a>
                    </li>
                    <li>
                      <a href="#">Laravel</a>
                    </li>
                    <li>
                      <a href="#">Bootstrap</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Etiquetas</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Servicios</a>
                    </li>
                    <li>
                      <a href="#">Java</a>
                    </li>
                    <li>
                      <a href="#">CSS</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">HTML5</a>
                    </li>
                    <li>
                      <a href="#">Docker</a>
                    </li>
                    <li>
                      <a href="#">kubernetes</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection