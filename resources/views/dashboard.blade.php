@extends('master')
  @section('title', 'Inicio')
  @section('content')  
    <!-- Page Content -->
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">Bienvenido {{ auth()->user()->name }}</h1>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
@endsection