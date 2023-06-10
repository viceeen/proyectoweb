@extends('template.master')
@section('contenido-principal')
<br>


<div class="container-fluid" style="background: linear-gradient(to bottom, #000000 0%, #FFFFFF 100%); width: 100%; height: 600px;">
<br>
<br>
    <div class="row d-flex justify-content-center">
        
        <div class="col-6">

            <div class="card text-bg-light" >
                <div class="card-header text-center" >
    
                    <p class="text-uppercase">Ingresar Propuesta</p>
                    <hr>
                    <div class="card-body">
                        <form method="POST" action="{{route('propuesta.store')}}" enctype="multipart/form-data">
                            <br>
    
                           <br>
    
                            @csrf
                            <div class="mb-3">
                                <label for="estudiante_rut" class="form-label">Ingrese su rut</label>
                                <input for="estudiante_rut" name="estudiante_rut" id="estudiante_rut"class="form-control">
                            </div>
                            <hr>
    
                            <br>
                            <br>
    
                           <br>
                            <br>
                            <div class="mb-">
                                <label for="propuesta" class="form-label">Ingrese Propuesta</label>
                                <input class="form-control"type="file" name="propuesta" id="propuesta" accept="application/pdf">
                            </div>
                            <hr>
                            <br>
    
    
    
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-outline-dark " type="submit">Enviar Propuesta</button>
                                </div>
                            </div>
                        </form>
    
                    </div>
                </div>
            </div>
        </div>
    
    
    </div>
</div>
@endsection




