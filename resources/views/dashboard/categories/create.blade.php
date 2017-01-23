@extends('dashboard.layout.base')

@section('title', 'Ventas Verdes - Categorías')

@section('dashboard-title', 'Agregar nueva categoría')

@section('dashboard-content')
	<div class="row">
		<div class="col-6">
			@include('dashboard.layout.errors')
			{{ Form::model($category = new \App\Category, ['url' => 'dashboard/categorias', 'class' => 'create_form form']) }}
			    @include('dashboard.categories.form', ['submit' => 'Publicar'])
			{{ Form::close() }}
		</div><!-- /.col-6 -->
	</div><!-- /.row -->
@endsection
