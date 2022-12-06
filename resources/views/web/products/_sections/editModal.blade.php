<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" enctype="multipart/form-data" action="{{ route('web.products.update',$product->id) }}">
            @csrf
            <div class="modal-body">
                <div class="col-12">
                    <div class="row">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="">Descripcion</label>
                            <input type="text" class="form-control" name="description" value="{{ $product->description }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="">Precio</label>
                            <input type="number" class="form-control" step="0.01"  name="price" value="{{ $product->price }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="">Categoría</label>
                            <select name="category_id" class="form-control" id="">
                                <option value="" selected disabled>Selecciona una categoria</option>
                                @foreach($categories as $category)
                                    <option @if ($product->category_id==$category->id) selected="selected" @endif value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="">Imagen</label>
                            <input type="file" accept="image/png, image/jpeg" value="{{ $product->image }}" class="form-control" name="image">
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </form>
      </div>
    </div>
</div>