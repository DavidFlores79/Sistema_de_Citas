@extends('layouts.form')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-5 col-md-7">
        <div class="card bg-secondary shadow border-0">
            {{-- <div class="card-header bg-transparent pb-5">
                <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small>
                </div>
                    <div class="btn-wrapper text-center">
                        <a href="#" class="btn btn-neutral btn-icon">
                            <span class="btn-inner--icon"><img src="{{ asset('img/icons/common/github.svg') }}"></span>
                            <span class="btn-inner--text">Github</span>
                        </a>
                        <a href="#" class="btn btn-neutral btn-icon">
                            <span class="btn-inner--icon"><img src="{{ asset('img/icons/common/google.svg') }}"></span>
                            <span class="btn-inner--text">Google</span>
                        </a>
                    </div>
            </div> --}}
            <div class="card-body px-lg-5 py-lg-5">
                
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first() }}
                    </div>
                @else
                    <div class="text-center text-muted mb-4">
                    <small>Ingresa tus datos para iniciar sesión</small>
                    </div>
                @endif
                

                <form role="form" method="POST" action="{{ route('login') }}">
                
                @csrf
                <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Correo Electrónico" type="email" name="email" value="{{ old('email') }}" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Contraseña" type="password" id="password" name="password" required>
                    </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox">
                    <label class="custom-control-label" for="remember">
                    <span class="text-muted">Recuérdame</span>
                    </label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">Ingresar</button>
                </div>
                </form>
            </div>
        </div>
        <div class="row mt-3">
           
        <div class="col-6">
            <a href="{{ route('password.request') }}" class="text-light"><small>Olvidaste tu contraseña?</small></a>
        </div>
        <div class="col-6 text-right">
            <a href="{{ url('register') }}" class="text-light"><small>Registrarse</small></a>
        </div>
        </div>
    </div>
</div>

@endsection
