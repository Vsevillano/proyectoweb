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
          <div class="card mb-4" >
            <img class="card-img-top" src="img/{{$post->image}}" alt="Imagen de {{ $post->title }}" style="max-height:350px;">
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
          <!--
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Anterior</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Siguiente &rarr;</a>
            </li>
          </ul>
          -->

        </div>

        @include('shared.sidebar')



      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection