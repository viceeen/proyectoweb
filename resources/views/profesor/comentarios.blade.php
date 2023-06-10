@extends('template.master')
@section('contenido-principal')
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
                <th scope="col">Eliminar Comentario</th>
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
                        <td>
                            <form method="POST" action="{{route('comentario.destroy')}}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection