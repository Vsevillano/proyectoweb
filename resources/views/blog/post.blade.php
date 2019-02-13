@extends('master')
  @section('title', '| Blog')
  @section('content') 
  
  <!-- Page Content -->
    <div class="container">
    <br><br>
    <p></p>
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">{{$post->title}}</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Inicio</a>
		</li>
		<li class="breadcrumb-item">
			<a href="/blog">Blog</a>
		</li>
        <li class="breadcrumb-item active">Post</li>
      </ol>

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="../../img/{{$post->image}}" alt="{{$post->image}}">

          <hr>

          <!-- Date/Time -->
          <p>Publicado el dia {{$post->publish_date}}, a las {{$post->created_at}}</p>
          <hr>

          <!-- Post Content -->
          <p class="lead">{{$post->resume}}</p>

          <p>{{$post->description}}</p>

          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Deja un comentario:</h5>
            <div class="card-body">
                <form action="{{ url('/blog/post/postCreatecomment') }}" method="POST">
                  {!! csrf_field() !!}
                  <input type="hidden" name="post_id" value="{{$post->id}}">
                  <input type="hidden" name="user" value="1">

                <div class="form-group">
                  <textarea class="form-control" name="comment" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Comentar</button>
              </form>
            </div>
          </div>
          @foreach($comments as $comment)
          <!-- Single Comment -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">{{$comment->username}}</h5>
              {{$comment->text}}
            </div>
          </div>
          @endforeach



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