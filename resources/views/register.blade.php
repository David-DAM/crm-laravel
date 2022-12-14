@extends('generals.base')
@section('title')Register @endsection
@section('header')
    
@endsection
@section('body')
    <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
              <div class="card-body p-4 p-sm-5">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">{{ session('message') }}</h4>
                        {{session('request')}}
                    </div>
                @endif
                
                <script>
                  $(".alert").alert();
                </script>
                <h5 class="card-title text-center mb-5 fw-light fs-5">Registrarse</h5>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    @error('email')
                      <div class="alert alert-danger" role="alert">
                        <strong>{{$message}}</strong>
                      </div>
                    @enderror
                  <div class="form-floating mb-3">
                    <label for="floatingInput">Correo</label>
                    <input type="email" value="{{ old('email') }}" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                  </div>
                  @error('password')
                      <div class="alert alert-danger" role="alert">
                        <strong>{{$message}}</strong>
                      </div>
                    @enderror
                  <div class="form-floating mb-3">
                    <label for="floatingPassword">Contraseña</label>
                    <input type="password" value="{{ old('password') }}" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                  </div>
                  @error('name')
                      <div class="alert alert-danger" role="alert">
                        <strong>{{$message}}</strong>
                      </div>
                    @enderror
                  <div class="form-floating mb-3">
                    <label for="floatingInput">Nombre</label>
                    <input type="text" value="{{ old('name') }}" class="form-control" name="name" id="floatingInput" >
                  </div>
                  @error('lastname')
                      <div class="alert alert-danger" role="alert">
                        <strong>{{$message}}</strong>
                      </div>
                    @enderror
                  <div class="form-floating mb-3">
                    <label for="floatingInput">Apellidos</label>
                    <input type="text" value="{{ old('lastname') }}" class="form-control" name="lastname" id="floatingInput" >
                  </div>
                  <div class="d-grid">
                    <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">
                        Registrarse
                    </button>
                  </div>
                  <hr class="my-4">
                  <div class="form-check mb-3">
                    <a href="{{ route('login') }}">Iniciar sesión</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection