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

        
          @if (Auth::guest())
          <div class="media mb-4">
              <p><strong>Por favor, inicie sesión en el sistema para comentar.</strong></p>
          </div>

          @else
          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Deja un comentario:</h5>
            <div class="card-body">
                <form action="{{ url('/blog/post/postCreatecomment') }}" method="POST">
                  {!! csrf_field() !!}
                  <input type="hidden" name="post_id" value="{{$post->id}}">
                  <input type="hidden" name="user" value="{{ auth()->user()->name }}">

                <div class="form-group">
                  <textarea class="form-control" name="comment" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Comentar</button>
              </form>
            </div>
          </div>
          @endif

        </div>
        <!-- /.col-lg-8 -->

        @include('shared.sidebar')

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->