@extends('template.master')
@section('contenido-principal')
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Rut</th>
      <th scope="col">Fecha</th>
      <th scope="col">Documento</th>
      <th scope="col">Estado</th>
      <th scope="col">Comentario</th>
    </tr>
  </thead>
  <tbody>
    @foreach($estudiante->propuesta as $index=>$propuesta)
    <tr>
      <td>{{$propuesta->id}}</td>
      <td>{{$propuesta->estudiante_rut}}</td>
      <td>{{$propuesta->fecha}}</td>
      <td>{{$propuesta->documento}}</td>
      <td>
     <input  id="estado" name="estado" value="@if($propuesta->estado=='0') Esperado Revisión @elseif($propuesta->estado=='1') Aprobado @elseif($propuesta->estado=='2' ) Rechazado @elseif($propuesta->estado=='3') Modificar Propuesta @endif" disabled>
      </td>

      <td>
        <a href="{{route('estudiante.comentario',$propuesta->id)}}" class="btn btn-primary">Ver comentarios</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection