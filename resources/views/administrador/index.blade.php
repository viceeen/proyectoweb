@extends('template.master')
@section('contenido-principal')
<br>
<div class="container-fluid" style="background: linear-gradient(to bottom, #000000 0%, #FFFFFF 100%); width: 100%; height: 600px;">
  <br>
  <div class="row">
    <div class="col-12 col-xl-4 mb-3">
      <div class="card bg-dark" style="width: 30rem; ">
        <div class="card-header">

          <img class="card-img-top " src="{{asset('images/profe.jpg')}}" alt="" style="width: 100%; height: 350px;">
        </div>
        <div class="card-body">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profesor">
            Agregar Profesor
          </button>
          <a href="{{route('profesor.editar')}}" class="btn btn-danger">Ver listado profesores</a>
  
          <!-- Modal -->
          <div class="modal fade" id="profesor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Profesor</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="{{route('profesor.store')}}">
                          @csrf
                          <div class="mb-3">
                              <label for="profesor_rut" class= "form-label">Rut</label>
                              <input name="profesor_rut" type="text" id="profesor_rut" class="form-control">
                          </div>
                          <div class="mb-3">
                              <label for="profesor_nombre" class= "form-label">Nombre</label>
                              <input name="profesor_nombre" type="text" id="profesor_nombre" class="form-control">
                          </div>
                          <div class="mb-3">
                              <label for="profesor_apellido" class="form-label">Apellido</label>
                              <input name="profesor_apellido" type="text" id="profesor_apellido" class="form-control">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Agregar</button>
                          </div>
                    </form>
                </div>
  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-xl-4 mb-3">
      <div class="card bg-dark" style="width: 30rem;">
        <div class="card-header">
          <img class="card-img-top" src="{{asset('images/estudiando.jpg')}}" alt="" style="width: 100%; height: 350px;" >
        </div>
        <div class="card-body">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#estudiante">
            Agregar Estudiante
          </button>
          <a href="{{route('estudiante.editar')}}" class="btn btn-danger">Ver listado estudiantes</a>
  
  
            <!-- Modal -->
            <div class="modal fade" id="estudiante" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel1">Agregar Estudiante</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="{{route('estudiantes.store')}}">
                          @csrf
                          <div class="mb-3">
                              <label for="nombre" class= "form-label">Nombre</label>
                              <input name="nombre" type="text" id="nombre" class="form-control">
                          </div>
                          <div class="mb-3">
                              <label for="apellido" class="form-label">Apellido</label>
                              <input name="apellido" type="text" id="apellido" class="form-control">
                          </div>
                          <div class="mb-3">
                              <label for="rut" class="form-label">Rut</label>
                              <input name="rut"type="text" id="rut" class="form-control">
                          </div>
                          <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input name="email" type="email" id="email" class="form-control">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Agregar</button>
                          </div>
                    </form>
                  </div>
  
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  
    <div class="col-12 col-xl-4 mb-3">
      <div class="card bg-dark" style="width: 30rem;">
        <div class="card-header">
          <img class="card-img-top" src="{{asset('images/documentor.jpg')}}" alt="" style="width: 100%; height: 350px;">
        </div>
        <div class="card-body">
          <a href="{{route('administrador.propuestas')}}" class="btn btn-danger">Ver Propuestas</a>
        </div>
      </div>
    </div>
  
  </div>
</div>

@endsection