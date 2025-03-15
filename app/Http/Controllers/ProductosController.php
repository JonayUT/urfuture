<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Productos;
use Symfony\Component\HttpFoundation\Response;

class ProductosController extends Controller
{
    public function show()
    {
        return view('productos', [
            'productos' => Productos::all()
        ]);
    }

    public function store(Request $request)
    {
        //Validacion de los datos
        $data = $request->validate([
            'Nombre' => 'required|string|max:255',
            'Descripcion' => 'required|string',
            'Precio' => 'required|numeric',
            'Tipo' => 'required|string'
        ]);

        // Crear y guardar el producto en MongoDB
        $producto = new Productos();
        $producto->Nombre = $data['Nombre'];
        $producto->Descripcion = $data['Descripcion'];
        $producto->Precio = $data['Precio'];
        $producto->Tipo = $data['Tipo'];

        $producto->save();

        return redirect()->route('productos')->with('success', 'Producto agregado correctamente');
    }
    public function destroy($id)
    {
        $producto = Productos::find($id);

        if ($producto) {
            $producto->delete();
            return redirect()->route('productos')->with('success', 'Producto eliminado correctamente');
        } else {
            return redirect()->route('productos')->with('error', 'Producto no encontrado');
        }
    }
}