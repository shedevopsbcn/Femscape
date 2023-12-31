@extends('layouts.app')

@section('content')
<main class="d-flex justify-content-center">
<form method="POST" action="{{ route('login') }}" class="reg-form" novalidate>
    @csrf

    <h2 class="text-center mb-3 title border-bottom border-3 pb-2">Acceso de usuario</h2>
    
    @if(session('mensaje'))
        <p class="alert alert-danger">{{ session('mensaje') }}</p>
    @endif

    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" name="email" class="form-control @error('email') border border-danger @enderror" value="{{ old('email') }}" id="email" aria-describedby="emailHelp" placeholder="Escribe tu e-mail...">
        
        @error('email')
          <p class="alert alert-danger" role="alert">{{ $message }}</p>
          @enderror
    </div>
    
    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" name="password" class="form-control @error('password') border border-danger @enderror" id="password" placeholder="Escribe tu contraseña...">
          
        @error('password')
        <p class="alert alert-danger" role="alert">{{ $message }}</p>
        @enderror
      </div>
      <div class="d-flex justify-content-evenly">
        <button type="submit" class="btn btn-primary">Aceptar</button>
        <a class="btn btn-danger" href="{{ route('register') }}" role="button">Cancelar</a>
      </div>
  </form>
</main>
@endsection
