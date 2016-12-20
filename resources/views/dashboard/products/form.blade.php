<div class="form-group">
    {{ Form::file('photo', ['class' => 'file']) }}
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
    {{ Form::input('text', 'sku', null, ['class' => 'input']) }}
</div>
<!-- /.form-group -->
<div class="form-group">
    {{ Form::label('regular_price', 'Precio regular', ['class' => 'label']) }}
    {{ Form::input('text', 'regular_price', null, ['class' => 'input']) }}
</div>
<!-- /.form-group -->
<div class="form-group">
    {{ Form::label('sale_price', 'Precio de oferta', ['class' => 'label']) }}
    {{ Form::input('text', 'sale_price', null, ['class' => 'input']) }}
</div>
<!-- /.form-group -->
<div class="form-group">
    {{ Form::label('stock', 'En existencia', ['class' => 'label']) }}
    {{ Form::input('text', 'stock', null, ['class' => 'input']) }}
</div>
<!-- /.form-group -->
<div class="form-group">
    {{ Form::label('category', 'Categoría', ['class' => 'label']) }}
    {{ Form::select('category_list[]', $categories, null, ['multiple', 'class' => 'select']) }}
</div>
<!-- /.form-group -->
<div class="form-group">
    {{ Form::submit($submit, ['class' => 'btn btn-green']) }}
</div>
<!-- /.form-group -->
