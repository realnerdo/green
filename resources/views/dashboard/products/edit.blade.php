@extends('dashboard.products.base')

@section('dashboard-title', 'Editar producto')

@section('dashboard-content')
    {{ Form::model($product, ['url' => 'dashboard/productos/'.$product->slug, 'files' => true, 'method' => 'PATCH', 'class' => 'create_form form']) }}
        @include('dashboard.products.form', ['submit' => 'Actualizar'])
    {{ Form::close() }}
@endsection
