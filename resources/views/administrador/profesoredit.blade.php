@extends('template.master')
@section('contenido-principal')

<div class="row">
    <div class="col">
        <h3>Editar Profesor</h3>

    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                {{$profesor->nombre}}
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('profesor.update',$profesor->rut)}}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">                                                
                        <label for="profesor_rut" class= "form-label">Rut</label>
                        <input name="profesor_rut" type="text" id="profesor_rut" class="form-control" value="{{$profesor->rut}}">
                    </div>
                    <div class="mb-3">                                                
                        <label for="profesor_nombre" class= "form-label">Nombre</label>
                        <input name="profesor_nombre" type="text" id="profesor_nombre" class="form-control" value="{{$profesor->nombre}}">
                    </div>
                    <div class="mb-3">
                        <label for="profesor_apellido" class="form-label">Apellido</label>
                        <input name="profesor_apellido" type="text" id="profesor_apellido" class="form-control" value="{{$profesor->apellido}}">
                    </div>
                    <div class="mb-3">
                        <a href="{{route('profesor.editar')}}" class="btn btn-danger">Volver</a>
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection