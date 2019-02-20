@extends('master')
  @section('title', '| Blog')
  @section('content') 
  
  <!-- Page Content -->
  <div class="container">
		<br><br>
		<!-- Page Heading/Breadcrumbs -->
		<h1 class="mt-4 mb-3">Editar post</h1>
	
		<div class="row">
			<!-- Blog Entries Column -->
			<div class="col-md-8">
				<form action="{{ url('/blog/post/savepost') }}" method="POST" enctype="multipart/form-data">
					{!! csrf_field() !!}
					@if(isset($post))
						<input type="hidden" name="post_id" value="{{$post->id}}">
					@endif

					<label for="title">Título</label>
					<input type="text" name="title" id="title" class="form-control" placeholder="Título..." value="{{isset($post) ? $post->title : ''}}">
					<label for="publish_date">Fecha de publicacion</label>
					<input type="date" name="publish_date" id="publish_date" class="form-control" placeholder="" value="{{isset($post) ? $post->publish_date : ''}}">
					<label for="resume">Resumen</label>
					<textarea type="text" name="resume" id="resume" class="form-control" placeholder="Resumen..." rows="3" maxlength="300">{{isset($post) ? $post->resume : ''}}</textarea>
					<label for="description">Descripción</label>
					<textarea type="text" name="description" id="description" class="form-control" placeholder="Descripcion..." rows="7">{{isset($post) ? $post->description : ''}}</textarea>
					<br>
					<label for="imageInput">Imagen del post</label>
					<input data-preview="#preview" name="input_img" type="file" id="imageInput">
					<br>
					<label for="title">¿Publicado?</label>
					<select name="status" id="status" class="form-control">
						<option value="0" {{isset($post) && $post->status == 0 ? 'selected' : ''}}>NO</option>
						<option value="1" {{isset($post) && $post->status == 1 ? 'selected' : ''}}>SI</option>
					</select>
					<input type="submit" class="btn btn-success" value="Guardar">
				</form>
			</div>
		</div>
		<!-- /.row -->
		<br>
		<br>
	</div>
	<!-- /.container -->
@endsection
