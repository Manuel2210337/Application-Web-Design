<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto; // Asegúrate que el nombre coincida con tu archivo
use App\Models\categoria;

class ProductController extends Controller
{
    public function create() {
        $categories = categoria::all(); 
        return view('products.create', compact('categories'));
    }

    // ESTA ES LA FUNCIÓN QUE TE FALTA:
    public function store(Request $request) {
        // 1. Validamos los datos que vienen del formulario
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'categoria_id' => 'required'
        ]);

        // 2. Guardamos en la base de datos
        producto::create($request->all()); 

        // 3. Redirigimos (puedes crear una vista index luego)
        return "¡Producto guardado con éxito en MySQL!";
    }
}