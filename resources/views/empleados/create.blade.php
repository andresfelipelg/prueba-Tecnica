@extends('layouts.app')

@section('content')

 <h1 class="text-center mt-3">Crear Empleado</h1>
  <form class="mt-5" id="formulario" action="{{ route('empleados.store')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="nombrecompleto" class="form-label"  >Nombre Completo *</label>
    <input type="text" class="form-control" name="nombre" id="nombrecompleto" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email *</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>
  <div class="mb-2">
  <label for="">Sexo *</label>
</div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="sexo" id="masculino" value="M">
    <label class="form-check-label" for="masculino">
        Masculino
    </label>
  </div>
  <div class="form-check mb-3">
    <input class="form-check-input" type="radio" name="sexo" id="femenino" value="F">
    <label class="form-check-label" for="femenino">
        Femenino
    </label>
  </div>
  <select name="area_id"  class="form-select mb-4" aria-label="Default select example">
    <option selected>seleccione el area</option>
    @foreach ($areas as $area)
    <option class="form-control"  value="{{$area->id}}">{{$area->nombre}}</option>
    @endforeach
</select>
  {{-- <select class="form-select mb-4" name="area_id" aria-label="Default select example">
    <option selected>seleccione el area</option>
    <option value="1">Administracion</option>
    <option value="2">Ventas</option>
    <option value="3">Calidad</option>
    <option value="4">Produccion</option>
  </select> --}}

  <div class="form-floating mb-3">
    <textarea class="form-control" name="descripcion" placeholder="Descripcion" id="descripcion"></textarea>
    <label for="descripcion">Descripcion de la experiencia del empleado</label>
  </div>
  <div class="form-check form-switch mt-2">
    <input class="form-check-input"  type="checkbox" name="boletin" role="switch" id="boletin" value="1">
    <label class="form-check-label" for="flexSwitchCheckDefault">Deseo recibir boletin informativo</label>
  </div>
  <div class="mb-2 mt-3">
    <label for="">Roles *</label>
  <div class="form-check form-switch mt-2">
  <input class="form-check-input" type="checkbox" role="switch" name="rol" id="desarrollador">
 <label class="form-check-label" for="flexSwitchCheckDefault">Profesional de proyectos- Desarrollador</label>
</div>
<div class="form-check form-switch">
<input class="form-check-input" type="checkbox" name="rol"  role="switch" id="gerenteestrategico">
<label class="form-check-label" for="gerenteestrategico">Gerente estrategico</label>
  </div>
  <div class="form-check form-switch mb-2">
  <input class="form-check-input" type="checkbox" name="rol" role="switch" id="auxiliaradministrativo">
 <label class="form-check-label" for="flexSwitchCheckDefault">Auxiliar administrativo</label>
</div>
</div>
  <button type="submit" class="btn btn-primary mt-2" id="guardar">Guardar</button>
</form>
<script src="/js/index.js"></script>
@endsection



