@extends('master')
  @section('title', 'Inicio')
  @section('content') 

    <!-- Page Content -->
    <div class="container">

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
        <form action="{{ route('login') }}" method="post">
            {{ csrf_field() }}
            <h2 class="text-center">Inicio de sesión</h2>       
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group">
                <button  class="btn btn-primary btn-block">Recuperar contraseña</button>  
            </div>       
        </form>
    </div>
    </div>
    <!-- /.container -->
@endsection