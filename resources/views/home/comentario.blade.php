@extends('template.master')
@section('contenido-principal')
<a href="{{route('estudiante.propuesta')}}" class="btn btn-danger ">Volver</a>
<div class="row">
    <div class="col">
        <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Rut Profesor</th>
                <th scope="col">Fecha</th>
                <th scope="col">Hora</th>
                <th scope="col">Comentario</th>
                </tr>
            </thead>
            <tbody>
                @foreach($profesor_propuesta as $profesor_propuesta)
                    <tr>
                        <th scope="row">{{$profesor_propuesta->propuesta_id}}</th>
                        <td>{{$profesor_propuesta->profesor_rut}}</td>
                        <td>{{$profesor_propuesta->fecha}}</td>
                        <td>{{$profesor_propuesta->hora}}</td>
                        <td>{{$profesor_propuesta->comentario}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</div>

@endsection