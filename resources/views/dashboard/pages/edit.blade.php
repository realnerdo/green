@extends('dashboard.products.base')

@section('dashboard-title', 'Editar página')

@section('dashboard-content')
    {{ Form::model($page, ['url' => 'dashboard/paginas/'.$page->slug, 'method' => 'PATCH', 'class' => 'create_form form']) }}
        @include('dashboard.pages.form', ['submit' => 'Actualizar'])
    {{ Form::close() }}
@endsection
