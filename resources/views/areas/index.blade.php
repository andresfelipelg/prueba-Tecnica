@extends('layouts.app')

@section('content')

<h1 class="text-center mb-5 mt-3">Listado de areas</h1>

<a href="{{ route('areas.create') }}" class="btn btn-outline-secondary button mt-2 mb-3"><i class="bi bi-file-earmark-plus-fill"></i> Crear</a>
<table class="table table-light text-center table-striped mt-4 table-bordered shadow-lg">
    <thead class="table-light">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Accion</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $areas as $area )
      <tr>
        <td>{{ $area->id }}</td>
        <td>{{ $area->nombre }}</td>
        <td>
            <form action="{{ route('areas.delete', $area->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{ route('areas.edit',$area->id) }}" class="btn btn-outline-secondary button d m-0"><i class="bi bi-pencil-square"></i> Editar</a>
                <button class="btn btn-outline-danger" type="submit"><i class="bi bi-trash-fill"></i> Borrar</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <script>
    let forms = document.querySelectorAll('form');
    forms.forEach(form =>{
    form.addEventListener('submit',(event)=>{
     event.preventDefault();
        Swal.fire({
                title: '¿Quieres eliminar el registro?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'confirmar'
    }).then((result) => {
      if (result.isConfirmed) {
          form.submit()
        Swal.fire(
          'Eliminado!',
          'Se elimino con exito.',
          'success'
        )
      }
    })
    });
    })
    </script>

@endsection
