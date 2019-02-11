@extends('master')
  @section('title', '| Dashboard')
  @section('content')  
    <!-- Page Content -->
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">Bienvenido {{ auth()->user()->name }}</h1>
                </div>
                <div class="panel-body">
                    <strong>Email:</strong> {{ auth()->user()->email }}
                </div>
                <div class="panel-footer">
                    <form method="post" action="{{ route('logout') }}">
                        {{ csrf_field() }}
                        <button class="btn btn-danger btn-xs btn-block">Cerrar sesión</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
@endsection