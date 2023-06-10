@extends('template.master')
@section('hojas-estilo')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection
@section('contenido-principal')
<h2>Propuestas</h2>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Rut</th>
      <th scope="col">Fecha</th>
     
      <th scope="col">Estado</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
    @foreach($propuestas as $propuesta)
    <tr>
      <th scope="row">{{$propuesta->id}}</th>
      <td>{{$propuesta->estudiante_rut}}</td>
      <td>{{$propuesta->fecha}}</td>
     
      <td>
        <input  id="estado" name="estado" value="@if($propuesta->estado=='0') Esperado Revisión @elseif($propuesta->estado=='1') Aprobado @elseif($propuesta->estado=='2' ) Rechazado @elseif($propuesta->estado=='3') Modificar Propuesta @endif" disabled>
      </td>
      <td>  
        <a href="{{route('propuesta.edit',$propuesta->id)}}" class="btn btn-danger">
          <span class="material-icons">edit</span>
        </a>       
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection