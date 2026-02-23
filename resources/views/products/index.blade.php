<div class="container p-5">
    <div class="d-flex justify-content-between mb-3">
        <h2>Lista de Productos</h2>
        <a href="{{ route('products.create') }}" class="btn btn-primary">+ Nuevo Producto</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->nombre }}</td>
                <td>${{ number_format($product->precio, 2) }}</td>
                <td><span class="badge bg-info text-dark">{{ $product->category->nombre ?? 'Sin categoría' }}</span></td>
                <td>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-info">Ver</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar?')">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>