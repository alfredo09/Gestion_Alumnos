<! <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center p-3">Colegio</h1>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST" action="{{ url('/registrar-alumno') }}">
        @csrf
            <h3 class="text-center text-secondary">Registro de Alumnos</h3>
            <?php
            include (app_path('Helpers/conexion.php'));
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombres</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Direccion</label>
                <input type="text" class="form-control" name="direccion">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="OK">Registrar</button>
            @if(isset($message))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Email</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include (app_path('Helpers/conexion.php'));
                    $sql=$conexion->query(" select * from alumno ");
                    while($datos=$sql->fetch_object()){?>
                        <tr>
                            <td><?= $datos->id ?></td>
                            <td><?= $datos->Nombres ?></td>
                            <td><?= $datos->Apellidos ?></td>
                            <td><?= $datos->Direccion ?></td>
                            <td><?= $datos->Correo ?></td>
                            <td>
                                <!--a href="{{ route('alumnos.editar', ['id' => $datos->id]) }}" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a-->
                                <form method="POST" action="{{ route('alumnos.actualizar', ['id' => $datos->id]) }}">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                                </form>
                                <!--a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a-->
                                <form method="POST" action="{{ route('alumnos.eliminar', ['id' => $datos->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @if(session('message') && $datos->id == session('updated_student_id'))
                            <tr>
                                <td colspan="5">
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                </td>
                            </tr>
                        @endif
                    <?php }
                    ?>
                    
                    
                </tbody>
            </table>
        </div>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
