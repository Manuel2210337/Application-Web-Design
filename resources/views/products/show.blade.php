<div class="container p-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h2>Detalles del Producto #{{ $product->id }}</h2>
        </div>
        <div class="card-body">
            <h3><strong>Nombre:</strong> {{ $product->name }}</h3>
            <p><strong>Precio:</strong> ${{ number_format($product->price, 2) }}</p>
            <p><strong>categoria_id:</strong> {{ $product->category_id }}</p>
            <hr>
            <p class="text-muted">Creado el: {{ $product->created_at->format('d/m/Y') }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Volver</a>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Editar Datos</a>
        </div>
    </div>
</div>