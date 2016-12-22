@extends('dashboard.categories.base')

@section('dashboard-title', 'Editar categoría')

@section('dashboard-content')
    {{ Form::model($category, ['url' => 'dashboard/categorias/'.$category->slug, 'method' => 'PATCH', 'class' => 'create_form form']) }}
        @include('dashboard.categories.form', ['submit' => 'Actualizar'])
    {{ Form::close() }}
@endsection
