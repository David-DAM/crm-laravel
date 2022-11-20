@extends('generals.base')
@section('title')Login @endsection
@section('header')   
@endsection
@section('body')
    <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
              <div class="card-body p-4 p-sm-5">
                @if (session('errors'))
                    <div class="alert alert-warning" role="alert">
                        <h4 class="alert-heading">{{ $errors->first('message') }}</h4>
                        {{session('request')}}
                    </div>
                @endif
                
                <script>
                  $(".alert").alert();
                </script>
                <h5 class="card-title text-center mb-5 fw-light fs-5">Iniciar sesión</h5>
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Correo</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Contraseña</label>
                  </div>
    
                  <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                    <label class="form-check-label" for="rememberPasswordCheck">
                      Recordar contraseña
                    </label>
                  </div>
                  <div class="d-grid">
                    <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">
                        Iniciar sesión
                    </button>
                  </div>
                  <hr class="my-4">
                  <div class="form-check mb-3">
                    <a href="{{ route('register') }}">Registrarse</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection