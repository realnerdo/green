<div class="form-group">
    @if ((isset($product)))
        <div class="photo">
            <img src="{{ $product->medias->first()->url }}" alt="" class="img" width="300">
        </div>
        <!-- /.photo -->
    @else
        {{ Form::file('photo', ['class' => 'file']) }}
    @endif
</div>
<!-- /.form-group -->
<div class="form-group">
    {{ Form::label('title', 'Título', ['class' => 'label']) }}
    {{ Form::input('text', 'title', null, ['class' => 'input']) }}
</div>
<!-- /.form-group -->
<div class="form-group">
    {{ Form::label('description', 'Descripción', ['class' => 'label']) }}
    {{ Form::textarea('description', null, ['class' => 'input']) }}
</div>
<!-- /.form-group -->
<div class="form-group">
    {{ Form::label('sku', 'SKU', ['class' => 'label']) }}
    {{ Form::input('text', 'sku', (isset($product)) ? $product->variations->first()->meta->sku : null, ['class' => 'input']) }}
</div>
<!-- /.form-group -->
<div class="form-group">
    {{ Form::label('regular_price', 'Precio regular', ['class' => 'label']) }}
    {{ Form::input('text', 'regular_price', (isset($product)) ? $product->variations->first()->meta->regular_price : null, ['class' => 'input']) }}
</div>
<!-- /.form-group -->
<div class="form-group">
    {{ Form::label('sale_price', 'Precio de oferta', ['class' => 'label']) }}
    {{ Form::input('text', 'sale_price', (isset($product)) ? $product->variations->first()->meta->sale_price : null, ['class' => 'input']) }}
</div>
<!-- /.form-group -->
<div class="form-group">
    {{ Form::label('stock', 'En existencia', ['class' => 'label']) }}
    {{ Form::input('text', 'stock', (isset($product)) ? $product->variations->first()->meta->stock : null, ['class' => 'input']) }}
</div>
<!-- /.form-group -->
<div class="form-group">
    {{ Form::label('category', 'Categoría', ['class' => 'label']) }}
    {{ Form::select('category_list[]', $categories, (isset($product)) ? $product->categories->first()->id : null, ['multiple', 'class' => 'select']) }}
</div>
<!-- /.form-group -->
<div class="form-group">
    {{ Form::submit($submit, ['class' => 'btn btn-green']) }}
</div>
<!-- /.form-group -->
