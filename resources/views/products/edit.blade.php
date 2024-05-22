@extends('layouts.app')

@section('content')
    <h1>Editar producto</h1>

    @if ($product)
        <form method="POST" action="{{ route('products.update', $product->idProduct) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>

            <div class="form-group">
                <label for="price">Precio:</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" step="1" required>
            </div>

            <div class="form-group">
                <label for="price">Usuario:</label>
                <input type="number" class="form-control" id="user_last_update" name="user_last_update" step="1" required>
            </div>

            <div class="form-group">
                <label for="status">Estado:</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="1" @if ($product->status) selected @endif>Activo</option>
                    <option value="0" @if (!$product->status) selected @endif>Inactivo</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>
    @else
        <p>Producto no encontrado.</p>
    @endif
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Volver</a>

@endsection
