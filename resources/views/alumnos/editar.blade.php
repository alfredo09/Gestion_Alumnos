<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<form class="col-4 p-3 m-auto" method="POST" action="{{ route('alumnos.actualizar', ['id' => $alumno->id]) }}">
        @csrf
        @method('PUT')
        <h5 class="text-center text-secondary">Modificar Alumno</h5>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombres</label>
            <input type="text" class="form-control" name="nombre" value="{{ $alumno->nombre }}">
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="apellido" value="{{ $alumno->apellido }}">
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" name="direccion" value="{{ $alumno->direccion }}">
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo</label>
            <input type="text" class="form-control" name="correo" value="{{ $alumno->correo }}">
        </div>

        <button type="submit" class="btn btn-primary" name="btnregistrar" value="OK">Actualizar Alumno</button>



    </form>
</body>
</html>
