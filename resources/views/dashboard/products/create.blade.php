@extends('dashboard.layout.base')

@section('title', 'Ventas Verdes - Productos')

@section('dashboard-title', 'Agregar nuevo producto')

@section('dashboard-content')
	<div class="row">
		<div class="col-6">
			@include('dashboard.layout.errors')
			{{ Form::model($product = new \App\Product, ['url' => url('dashboard/productos'), 'files' => true, 'class' => 'create_form form']) }}
			    @include('dashboard.products.form', ['submit' => 'Publicar'])
			{{ Form::close() }}
		</div><!-- /.col-6 -->
	</div><!-- /.row -->
@endsection
