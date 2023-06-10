@extends('template.master')
@section('hojas-estilo')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection
@section('contenido-principal')

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Rut Alumno</th>
      <th scope="col">Fecha Subida</th>
      <th scope="col">Descargar Documento</th>
      <th scope="col">Estado</th>
      <th scope="col">Mandar Comentario</th>
      <th scope="col">Ver Comentario</th>
    </tr>
  </thead>
  <tbody>
    @foreach($estudiante->propuesta as $index=>$propuesta)
    <tr>
      <td>{{$propuesta->id}}</td>
      <td>{{$propuesta->estudiante_rut}}</td>
      <td>{{$propuesta->fecha}}</td>
      <td>
        <a href="{{route('download.propuesta',$propuesta->get()->last()->documento)}}" class="btn btn-danger">
          <span class="material-icons">
            download
          </span>
        </a>
      </td>
      <td>
      <input  id="estado" name="estado" value="@if($propuesta->estado=='0') Esperado Revisión @elseif($propuesta->estado=='1') Aprobado @elseif($propuesta->estado=='2' ) Rechazado @elseif($propuesta->estado=='3') Modificar Propuesta @endif" disabled>
      </td>
      <td>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <span class="material-icons">
            add_comment
          </span>
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-dark">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Comentario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body bg-dark">
                <form method="POST"action="{{route('comentario.store')}}">
                  @csrf
                  <div class="mb-3">
                    <label class="form-label"for="profesor_rut">Ingrese su rut</label>
                    <input class="form-control"type="text" name="profesor_rut" id="profesor_rut">
                  </div>
                  <div class="mb-3">
                    <label class="form-label"for="propuesta_id">Ingrese ID de propuesta</label>
                    <input class="form-control"type="text" name="propuesta_id" id="propuesta_id">
                  </div>
                  <div class="mb-3">
                    <label class="form-label"for="comentario">Comentario</label>
                    <input class="form-control"type="text" name="comentario" id="comentario">
                  </div>
                  
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Mandar Comentario</button>
                </form>
              </div>
  
            </div>
          </div>
        </div>
      </td>

      <td>
        <a href="{{route('comentario.index',$propuesta->id )}}" class="btn btn-danger">Ver comentarios</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>




@endsection