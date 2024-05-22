<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $middleware = [
        'App\Http\Middleware\VerifyCsrfToken',
    ];
    
    public function index()
    {
        $products = Product::all(); // Obtiene todos los productos

        return view('products.index', compact('products')); // Muestra la vista 'products.index' con los productos
    }

    public function create()
    {
        return view('products.create'); // Muestra la vista 'products.create' para crear un nuevo producto
    }

    public $timestamps = false;

    public function store(Request $request)
    {
        $timestamp = Carbon::now();
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'numeric|min:0',
            'status' => 'required|boolean',
            'user_creator' => 'integer',
            'created_at' => $timestamp,
        ]);

        $product = Product::create($validatedData);

        return redirect()->route('products.index')->with('success', 'Producto creado correctamente');
    }

    public function show($id)
    {
        $product = Product::find($id); // Busca el producto por ID

        if (!$product) {
            return abort(404); // Si no se encuentra el producto, devuelve un error 404
        }

        return view('products.show', compact('product')); // Muestra la vista 'products.show' con el producto
    }

    public function edit($id)
    {
        $product = Product::find($id); // Busca el producto por ID

        if (!$product) {
            return abort(404); // Si no se encuentra el producto, devuelve un error 404
        }

        return view('products.edit', compact('product')); // Muestra la vista 'products.edit' con el producto
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id); // Busca el producto por ID

        if (!$product) {
            return abort(404); // Si no se encuentra el producto, devuelve un error 404
        }

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'numeric|min:0',
            'status' => 'required|boolean',
            'user_last_update' => 'nullable|integer', 
        ]);

        $product->update($validatedData);

        return redirect()->route('products.index')->with('success', 'Producto actualizado correctamente');
    }

    public function destroy($id)
    {
        $product = Product::find($id); // Busca el producto por ID

        if (!$product) {
            return abort(404); // Si no se encuentra el producto, devuelve un error 404
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Producto eliminado correctamente');
    }
}
