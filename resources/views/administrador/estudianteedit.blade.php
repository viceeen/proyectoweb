@extends('template.master')
@section('contenido-principal')
<div class="row">
    <div class="col">
        <h3>Editar Estudiante</h3>
    </div>
</div>

<form method="POST" action="{{route('estudiante.update', $estudiante->rut)}}">
    @method('PUT')
    @csrf
    <div class="mb-3">                                                
        <label for="nombre" class= "form-label">Nombre</label>
        <input name="nombre" type="text" id="nombre" class="form-control" value="{{$estudiante->nombre}}">
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input name="apellido" type="text" id="apellido" class="form-control" value="{{$estudiante->apellido}}">
    </div>
    <div class="mb-3">
        <label for="rut" class="form-label">Rut</label>
        <input name="rut"type="text" id="rut" class="form-control" value="{{$estudiante->rut}}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" id="email" class="form-control" value="{{$estudiante->email}}">
    </div>
    <div class="mb-3">
        <a href="{{route('estudiante.editar')}}" class="btn btn-danger">Volver</a>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </div>
</form>
@endsection