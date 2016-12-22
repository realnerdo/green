@extends('dashboard.pages.base')

@section('dashboard-title', 'Agregar nueva página')

@section('dashboard-content')
    {{ Form::model($page = new \App\Page, ['url' => 'dashboard/paginas', 'class' => 'create_form form']) }}
        @include('dashboard.pages.form', ['submit' => 'Publicar'])
    {{ Form::close() }}
@endsection
