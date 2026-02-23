<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    // Le decimos a Laravel el nombre exacto de la tabla en MySQL
    protected $table = 'productos';

    // Permitimos que estos campos se llenen desde el formulario
    protected $fillable = ['nombre', 'precio', 'categoria_id'];
    

    // Relación: Un producto pertenece a una categoría
    public function categoria()
    {
        return $this->belongsTo(categoria::class, 'categoria_id');
    }
}