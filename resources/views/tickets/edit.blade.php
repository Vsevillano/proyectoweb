@extends('master')
@section('title', 'Editar un ticket')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">
                @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }} 
                    </div>
                @endif
                
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                    <legend>Editar ticket</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Titulo</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="tittle" placeholder="Title" name="title" value="{!! $ticket->title !!}">
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="content" class="col-lg-2 control-label">Contenido</label>
                        <div class="col-lg-10">
                            <textarea id="content" rows="3" class="form-control" name="content">{!! $ticket->content !!}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>
                            <input type="checkbox" name="status" {!! $ticket->status?"":"checked"!!} > ¿Cerrar este ticket?
                        </label>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection