@extends('layouts.app')

@section('content')

 <h1 class="text-center mt-3">Crear Area</h1>
  <form class="mt-5" id="formulario" action="{{ route('areas.store')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="nombrecompleto" class="form-label">Nombre del Area *</label>
    <input type="text" class="form-control" name="nombre" id="area">

  <button type="submit" class="btn btn-primary mt-2" id="guardar">Guardar</button>
</form>
@endsection
