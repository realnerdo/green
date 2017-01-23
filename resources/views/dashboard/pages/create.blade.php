@extends('dashboard.layout.base')

@section('title', 'Ventas Verdes - Páginas')

@section('dashboard-title', 'Agregar nueva página')

@section('dashboard-content')
	<div class="row">
		<div class="col-6">
			@include('dashboard.layout.errors')
			{{ Form::model($page = new \App\Page, ['url' => 'dashboard/paginas', 'class' => 'create_form form']) }}
			    @include('dashboard.pages.form', ['submit' => 'Publicar'])
			{{ Form::close() }}
		</div><!-- /.col-6 -->
	</div><!-- /.row -->
@endsection
