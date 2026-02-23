<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Nombre del Producto</label>
        <input type="text" name="nombre" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Precio</label>
        <input type="number" step="0.01" name="precio" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Categoría</label>
        <select name="categoria_id" class="form-select" required>
            <option value="">Selecciona una categoría</option>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>