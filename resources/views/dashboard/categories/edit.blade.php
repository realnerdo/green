@extends('dashboard.layout.base')

@section('title', 'Ventas Verdes - Categorías')

@section('dashboard-title', 'Editar categoría')

@section('dashboard-content')
	<div class="row">
		<div class="col-6">
			@include('dashboard.layout.errors')
			{{ Form::model($category, ['url' => 'dashboard/categorias/'.$category->slug, 'method' => 'PATCH', 'class' => 'create_form form']) }}
			    @include('dashboard.categories.form', ['submit' => 'Actualizar'])
			{{ Form::close() }}
		</div><!-- /.col-6 -->
	</div><!-- /.row -->
@endsection
