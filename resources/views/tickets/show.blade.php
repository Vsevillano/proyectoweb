@extends('master')
@section('title', 'Ver un ticket')
@section('content')

    <div class="container col-md8 col-md-offset-2">
        <div class="well well bs-component">
            <div class="content">
                <h2 class="header">{!! $ticket->title !!}</h2>
                <p><strong>Status</strong>: {!! $ticket->status ? 'Pendiente' : 'Respondido' !!}</p>
                <p>{!! $ticket->content !!}</p>
            </div>
            <a href="{!! action('TicketsController@edit', $ticket->slug) !!}" class="btn btn-info pull-left">Editar</a>
            
            <form action="{!! action('TicketsController@destroy', $ticket->slug) !!}" method="post" class="pull-left">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div>
                        <button type="submit" class="btn btn-warning">Borrar</button>        
                    </div>
            </form>

            <div class="clearfix"></div>
        </div>

            @foreach($comments as $comment)
                <div class="well well bs-component">
                    <div class="content">
                        {!! $comment->content !!}
                    </div>
                </div>
            @endforeach

        <div class="well well bs-component">
            <form action="comment" method="post" class="form-horizontal">
            
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <input type="hidden" name="_token" value="{{!! csrf_token() !!}}">
                <input type="hidden" name="post_id" value="{{!! $ticket->id !!}}">

                <fieldset>
                    <legend>Reply</legend>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <textarea name="content" rows="3" id="content" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10">
                            <button type="reset" class="btn btn-default">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Publicar</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>

@endsection