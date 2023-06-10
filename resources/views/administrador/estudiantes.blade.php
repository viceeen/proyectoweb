@extends('template.master')
@section('hojas-estilo')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection
@section('contenido-principal')

<h2>Estudiantes</h2>

        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Rut Estudiante</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Editar</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach($estudiantes as $estudiante)
                <tr>
                    <th>{{$estudiante->rut}}</th>
                    <td>{{$estudiante->nombre}}</td>
                    <td>{{$estudiante->apellido}}</td>
                    <td>{{$estudiante->email}}</td>
                    <td>
                       <a href="{{route('estudiante.edit', $estudiante->rut)}}"  class="btn btn-danger">
                            <span class="material-icons">edit</span>
                       </a>
                    </td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
 
@endsection