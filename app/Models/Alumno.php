<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    use HasFactory;

    protected $table = 'alumno';

    protected $fillable = [
        'id',
        'Nombres',  // Asegúrate de que coincide con el nombre de la columna en la base de datos
        'Apellidos',
        'Direccion',
        'Correo',
        // Otros campos
    ];
}
?>
