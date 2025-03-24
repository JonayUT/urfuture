<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Productos;

class ProductosController extends Controller
{
    public function index(Request $request)
    {
        $query = Productos::query();

        if ($request->filled('categoria')) {
            $query->where('Tipo', $request->categoria);
        }

        if ($request->filled('precio_min')) {
            $query->where('Precio', '>=', $request->precio_min);
        }

        if ($request->filled('precio_max')) {
            $query->where('Precio', '<=', $request->precio_max);
        }

        if ($request->filled('buscar')) {
            $query->where('Nombre', 'like', '%' . $request->buscar . '%');
        }

        $productos = $query->get();
        $categorias = Productos::select('Tipo')->distinct()->get();

        return view('productos', compact('productos', 'categorias'));
    }

    public function filtrarPorCategoria($categoria)
    {
        $productos = Productos::where('Tipo', $categoria)->get();
        $categorias = Productos::select('Tipo')->distinct()->get();

        switch ($categoria) {
            case 'Libros':
                return view('productos.libros', compact('productos', 'categorias', 'categoria'));
            case 'Aromaticos':
                return view('productos.aromaticos', compact('productos', 'categorias', 'categoria'));
            case 'Otros':
                return view('productos.otros', compact('productos', 'categorias', 'categoria'));
            default:
                return view('productos', compact('productos', 'categorias', 'categoria'));
        }
    }

    public function mostrarProducto($id)
    {
        $producto = Productos::findOrFail($id);
        return view('productos.show', compact('producto'));
    }

    public function store(Request $request)
    {
        //Validacion de los datos
        $data = $request->validate([
            'Nombre' => 'required|string|max:255',
            'Descripcion' => 'required|string',
            'Imagen' => 'required',
            'Precio' => 'required|numeric',
            'Tipo' => 'required|string'
        ]);

        // Crear y guardar el producto en MongoDB
        $producto = new Productos();
        $producto->Nombre = $data['Nombre'];
        $producto->Descripcion = $data['Descripcion'];
        $producto->Imagen = $data['Imagen'];
        $producto->Precio = $data['Precio'];
        $producto->Tipo = $data['Tipo'];

        $producto->save();

        return redirect()->route('productos')->with('success', 'Producto agregado correctamente');
    }

    public function update(Request $request, $id)
    {
        // Validar los datos
        $data = $request->validate([
            'Nombre' => 'required|string|max:255',
            'Descripcion' => 'required|string',
            'Imagen' => 'required',
            'Precio' => 'required|numeric',
            'Tipo' => 'required|string'
        ]);

        // Buscar el producto en la base de datos
        $producto = Productos::find($id);

        if (!$producto) {
            return redirect()->route('productos')->with('error', 'Producto no encontrado');
        }

        // Actualizar los datos del producto
        $producto->update($data);

        return redirect()->route('productos')->with('success', 'Producto actualizado correctamente');
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