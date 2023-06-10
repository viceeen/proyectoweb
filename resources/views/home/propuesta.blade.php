@extends('template.master')
@section('contenido-principal')
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">Rut</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Email</th>
            <th scope="col">Ver Propuesta</th>

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
                <a href="{{route('estudiante.propuestas_estudiante', $estudiante->rut)}}" class="btn btn-primary">Ver Propuesta</a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection