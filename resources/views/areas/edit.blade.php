@extends('layouts.app')

@section('content')

 <h1 class="text-center mt-3">Crear Area</h1>
  <form class="mt-5" id="formulario" action="{{ route('areas.update', $area->id)}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="nombrecompleto" class="form-label">Nombre del Area *</label>
    <input type="text" class="form-control" name="nombre" id="area" value="{{ $area->nombre }}">

  <button type="submit" class="btn btn-primary mt-2" id="guardar">Guardar</button>
</form>
@endsection
