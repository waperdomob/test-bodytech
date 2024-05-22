@extends('layouts.app')

@section('content')
    <h1>Crear nuevo producto</h1>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf

        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="price">Precio:</label>
            <input type="number" class="form-control" id="price" name="price" step="1" required>
        </div>

        <div class="form-group">
            <label for="price">Usuario:</label>
            <input type="number" class="form-control" id="user_creator" name="user_creator" step="1" required>
        </div>

        <div class="form-group">
            <label for="status">Estado:</label>
            <select class="form-control" id="status" name="status" required>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Volver</a>
@endsection
