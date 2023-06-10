@extends('template.master')
@section('contenido-principal')

<div class="container-fluid text-center">
<br>
<br>
<br>
<br>
    <div class="row align-items-center justify-content-center">
        <div class="col-3">
            <div class="row">
                <ul>
                    <li>0 = Esperando revision</li>
                    <li>1 = Aprobado</li>
                    <li>2 = Rechazado</li>
                    <li>3 = Modificar Propuesta</li>
                </ul>
            </div>
            <form method="POST"action="{{route('propuestas.update',$propuesta->id)}}">
                    @method('PUT')
                    @csrf
                <h1>Editar Estado</h1>
                <label for="estado"  class="form-label"></label>
                <input class="form-control" name="estado" id="estado" type="integer">
                <br>
                <div class="d-grid gap-2 col-6 mx-auto"><button type="submit" class="btn btn-danger text-center">Guardar Edicion</button></div>
                <br>
                <div class="d-grid gap-2 col-6 mx-auto"><a href="{{route('administrador.propuestas')}}" class="btn btn-danger text-center">Volver</a></div>
                
            </form>

        </div>
    </div>

</div>

<br>
<br>
<br>
@endsection