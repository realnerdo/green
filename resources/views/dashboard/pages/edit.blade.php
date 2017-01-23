@extends('dashboard.layout.base')

@section('title', 'Ventas Verdes - Páginas')

@section('dashboard-title', 'Editar página')

@section('dashboard-content')
	<div class="row">
		<div class="col-6">
			@include('dashboard.layout.errors')
			{{ Form::model($page, ['url' => 'dashboard/paginas/'.$page->slug, 'method' => 'PATCH', 'class' => 'create_form form']) }}
			    @include('dashboard.pages.form', ['submit' => 'Actualizar'])
			{{ Form::close() }}
		</div><!-- /.col-6 -->
	</div><!-- /.row -->
@endsection
