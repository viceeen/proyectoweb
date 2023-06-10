@extends('template.master')
@section('hojas-estilo')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection
@section('contenido-principal')
<br>
<h2>Profesores</h2>
<table class="table table-secondary table-striped table-dark"">
  <thead>
    <tr>
      <th scope="col">Rut Profesores</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th colspan="2">Editar</th>
    </tr>
  </thead>
  <tbody>
    @foreach($profesores as $profesor)
    <tr>
      <th>{{$profesor->rut}}</th>
      <td>{{$profesor->nombre}}</td>
      <td>{{$profesor->apellido}}</td>
      <td>
        <a href="{{route('profesor.edit',$profesor->rut)}}" class="btn btn-danger">
          <span class="material-icons">edit</span>
        </a>
      </td>
  
    </tr>
    @endforeach
  </tbody>
</table>


@endsection