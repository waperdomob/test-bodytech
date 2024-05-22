@extends('layouts.app')

@section('content')
    <h1>Productos</h1>

    <a href="{{ route('products.create') }}" class="btn btn-primary">Crear nuevo producto</a>

    @if (count($products) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->idProduct }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>@if ($product->status) Activo @else Inactivo @endif</td>
                        <td>
                            <a href="{{ route('products.show', $product->idProduct) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('products.edit', $product->idProduct) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('products.destroy', $product->idProduct) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay productos registrados.</p>
    @endif
@endsection
