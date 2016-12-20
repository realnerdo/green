@extends('dashboard.products.base')

@section('dashboard-title', 'Agregar nuevo producto')

@section('dashboard-content')
    {{ Form::model($product = new \App\Product, ['url' => 'dashboard/productos/nuevo', 'files' => true, 'class' => 'create_form form']) }}
        @include('dashboard.products.form', ['submit' => 'Guardar'])
    {{ Form::close() }}
@endsection
