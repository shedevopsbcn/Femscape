@extends('layouts.app')

@section('content')
<main class="container mt-5 d-flex justify-content-center">
    {{-- <div class="row justify-content-center align-items-center">
        <div class="col-md-8"> --}}
            <form class="custom-form w-form" action="{{ route('create.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h2 class="text-center mb-9 title">Crear destino</h2>
                <div class="w-100 border-bottom border my-10 line"></div>
                <div class="d-flex justify-content-around">
                
                    <div class="form-group">
                        <label class="mt-4" for="titulo">Título</label>
                        <input type="text"  name="place" class="form-control" id="titulo" placeholder="Escribe un título" required>
                        <div class="error-message"></div>
                        <label class="mt-4" for="ubicacion">Ubicación</label>
                        <select name="country" class="form-control" id="ubicacion" placeholder="Seleccione una ubicación" required>
                            <option value="">Seleccione una ubicación</option>
                        </select>
                        <input type="file" name="imagen" class="form-control-file mt-4" id="imagenInput">
                        <input type="text"  name="image" class="form-control" id="imagen" placeholder="Sube una imagen" required>
                        <button type="submit" class="btn btn-primary mt-8">Aceptar</button>
                        <a href="{{ route('indexUsers') }}"><button type="button" class="btn btn-secondary mt-8">Cancelar</button></a>
                    </div>

                    <div class="col-md-6">
                        <label class="mt-4" for="comentarios">¿Por qué quieres viajar allí?</label>
                        <textarea name="description" class="form-control flex-grow-1" id="comentarios" rows="10" required></textarea>
                    </div>
                </div>
                
            </form>
        {{-- </div>
    </div> --}}
</main>

@endsection


<script src="{{ asset('\public\javascript\selectubication.js') }}"></script> 
</html>
