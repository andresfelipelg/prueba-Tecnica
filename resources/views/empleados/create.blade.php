<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mt-3">Crear Empleado</h1>
    <div class="container">
      <div class="row">
        <div class="col-8 mx-auto">

  <form class="mt-5" id="formulario" action="{{ route('empleados.store')}}" method="POST">
    @csrf

  <div class="mb-3">
    <label for="nombrecompleto" class="form-label" name="nombre" >Nombre Completo *</label>
    <input type="text" class="form-control" id="nombrecompleto" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label" name="email">Email *</label>
    <input type="email" class="form-control" id="email">
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
  <select class="form-select mb-4" aria-label="Default select example">
    <option selected>seleccione el area</option>
    <option value="Administracion">Administracion</option>
    <option value="Ventas">Ventas</option>
    <option value="Calidad">Calidad</option>
    <option value="Produccion">Produccion</option>
  </select>
  <div class="form-floating mb-3">
    <textarea class="form-control" placeholder="Descripcion" id="descripcion"></textarea>
    <label for="descripcion">Descripcion de la experiencia del empleado</label>
  </div>
  <div class="form-check form-switch mt-2">
    <input class="form-check-input" name="boletin" type="checkbox" name="boletin" role="switch" id="boletin">
    <label class="form-check-label" for="flexSwitchCheckDefault">Deseo recibir boletin informativo</label>
  </div>
  <div class="mb-2 mt-3">
    <label for="">Roles *</label>
  <div class="form-check form-switch mt-2">
  <input class="form-check-input" type="checkbox" name="desarrollador" role="switch" id="desarrollador">
 <label class="form-check-label" for="flexSwitchCheckDefault">Profesional de proyectos- Desarrollador</label>
</div>
<div class="form-check form-switch">
<input class="form-check-input" type="checkbox" name="gerenteestrategico" role="switch" id="gerenteestrategico">
<label class="form-check-label" for="gerenteestrategico">Gerente estrategico</label>
  </div>
  <div class="form-check form-switch mb-2">
  <input class="form-check-input" type="checkbox" name="auxiliaradministrativo" role="switch" id="auxiliaradministrativo">
 <label class="form-check-label" for="flexSwitchCheckDefault">Auxiliar administrativo</label>
</div>
</div>
  <button type="submit" class="btn btn-primary mt-2" id="guardar">Guardar</button>
</form>
</div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="/js/index.js"></script>
  </body>
</html>
