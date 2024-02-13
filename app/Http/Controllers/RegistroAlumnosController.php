<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class RegistroAlumnosController extends Controller
{
    public function metodoQueManejaPost(Request $request)
    {
        // Lógica para manejar la solicitud POST
        if (!empty($request->input("btnregistrar"))) {
            if (!empty($request->input("nombre")) && !empty($request->input("apellido")) && !empty($request->input("direccion")) && !empty($request->input("correo"))) {
                $nombre = $request->input("nombre");
                $apellido = $request->input("apellido");
                $direccion = $request->input("direccion");
                $correo = $request->input("correo");

                // Utiliza Eloquent o el constructor de consultas para interactuar con la base de datos en Laravel
                // Esto es solo un ejemplo, deberías ajustarlo a tus modelos y esquemas de base de datos
                // Asegúrate de definir tu modelo Eloquent para la tabla 'test'
                $sql = \DB::table('alumno')->insert([
                    'Nombres' => $nombre,
                    'Apellidos' => $apellido,
                    'Direccion' => $direccion,
                    'Correo' => $correo,
                ]);

                if ($sql) {
                    //return response()->json(['message' => 'Alumno registrado correctamente']);
                    return view('welcome')->with('message', 'Alumno registrado correctamente');
                } else {
                    //return response()->json(['message' => 'Error al registrar Alumno'], 500);
                    return view('welcome')->with('message', 'Error al registrar Alumno');
                }

            } else {
                return response()->json(['message' => 'Alguno de los campos está vacío'], 400);
            }
        }

        return response()->json(['message' => 'Solicitud POST manejada correctamente']);
    }
    public function editarAlumno($id)
    {
        // Lógica para obtener los datos del alumno por su ID y cargar la vista de edición
        $alumno = Alumno::find($id);
        return view('alumnos.editar', ['alumno' => $alumno]);
    }
    
    public function actualizarAlumno(Request $request, $id)
    {
        // Lógica para actualizar los datos del alumno en la base de datos
        if (!empty($request->input("btnregistrar"))) {
            if (!empty($request->input("nombre")) && !empty($request->input("apellido")) && !empty($request->input("direccion")) && !empty($request->input("correo"))) {
                $alumno = Alumno::find($id);
                $alumno->Nombres = $request->input('nombre');
                $alumno->Apellidos = $request->input('apellido');
                $alumno->Direccion = $request->input('direccion');
                $alumno->Correo = $request->input('correo');
                // ... otros campos ...
                $alumno->save();
    
                // Redireccionar a la página principal
                return redirect('/')->with('message', 'Alumno actualizado correctamente');
            }
        }
        // Si hay errores o la lógica no se cumple, redirige a la página de edición con un mensaje de error
        return redirect()->route('alumnos.editar', ['id' => $id])->with('message', 'Error al actualizar el alumno');
    }
    public function eliminarAlumno($id)
    {
        $alumno = Alumno::find($id);

        if (!$alumno) {
            return redirect('/')->with('message', 'Error al encontrar el alumno');
        }

        $alumno->delete();

        return redirect('/')->with('message', 'Alumno eliminado correctamente');
    }
}
?>