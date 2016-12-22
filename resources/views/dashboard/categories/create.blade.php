@extends('dashboard.categories.base')

@section('dashboard-title', 'Agregar nueva categoría')

@section('dashboard-content')
    {{ Form::model($category = new \App\Category, ['url' => 'dashboard/categorias', 'class' => 'create_form form']) }}
        @include('dashboard.categories.form', ['submit' => 'Publicar'])
    {{ Form::close() }}
@endsection
