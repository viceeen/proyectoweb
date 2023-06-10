@extends('template.master')
@section('hojas-estilo')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection
@section('contenido-principal')
<br>
<div class=row>
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="row d-flex justify-content-between">
                    <div class="col">
                        <h4>Estudiantes</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">Rut</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Ver Propuestas</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($estudiantes as $estudiante)
                      <tr>
                        <th scope="row">{{$estudiante->rut}}</th>
                        <td>{{$estudiante->nombre}}</td>
                        <td>{{$estudiante->apellido}}</td>
                        <td>
                          <a href="{{route('profesor.estudiante',$estudiante->rut)}}" class="btn btn-secondary">
                            <span class="material-icons">visibility</span>
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

            </div>
        </div>
    </div>
</div>
@endsection