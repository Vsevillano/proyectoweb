@extends('master')
  @section('title', 'Inicio')
  @section('content') 

    <!-- Page Content -->
    <div class="container">

        @if(session()->has('flash'))
            <br>
            <div class="alert alert-info">
                {{  session('flash') }}
            </div>
        @endif 



        <style type="text/css">
        .login-form {
          width: 340px;
          margin: 50px auto;
          min-height: 60vh;
        }
        .login-form form {
          margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }
        .btn {        
            font-size: 15px;
            font-weight: bold;
        }
    </style>
    <div class="login-form text-center">
        <form action="{{ route('register') }}" method="post">
            {{ csrf_field() }}
            <h2 class="text-center">Registro</h2>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Nombre</label>
                <input type="name" class="form-control" placeholder="Nombre de usuario" name="name" value="{{ old('name') }}">
                {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
            </div>       
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" placeholder="Contraseña" name="password" >
                {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group">
                <label for="password-confirm">Repetir contraseña</label>
                <input type="password" class="form-control" placeholder="Repetir contraseña" name="password_confirmation" >
            </div>
            <div class="form-group">
                <button  class="btn btn-primary btn-block">Crear cuenta</button>  
            </div>      
        </form>
    </div>
    </div>
    <!-- /.container -->
@endsection