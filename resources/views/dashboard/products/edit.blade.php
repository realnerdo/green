@extends('dashboard.layout.base')

@section('title', 'Ventas Verdes - Productos')

@section('dashboard-title', 'Editar producto')

@section('dashboard-content')
	<div class="row">
		<div class="col-12">
			@include('dashboard.layout.errors')
			{{ Form::model($product, ['url' => 'dashboard/productos/'.$product->slug, 'files' => true, 'method' => 'PATCH', 'class' => 'create_form form']) }}
			    @include('dashboard.products.form', ['submit' => 'Actualizar'])
			{{ Form::close() }}
		</div><!-- /.col-12 -->
	</div><!-- /.row -->
@endsection
