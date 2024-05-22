@extends('layouts.app')

@section('content')
    <h1>Detalle del producto</h1>

    @if ($product)
        <p><strong>ID:</strong> {{ $product->idProduct }}</p>
        <p><strong>Nombre:</strong> {{ $product->name }}</p>
        <p><strong>Precio:</strong> {{ $product->price }}</p>
        <p><strong>
    @else
        <p>Producto no encontrado.</p>
    @endif
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Volver</a>

@endsection