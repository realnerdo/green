@extends('layout.base')

@section('content')
<section id="reset-email" class="section-auth">
    <div class="wrapper">
        <div class="row">
            <div class="col-12">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <h1 class="section-title">Generar nueva contraseña</h1>
                <!-- /.section-title -->
                {{ Form::open(['url' => '/password/email', 'class' => 'reset-email-form form']) }}
                    <div class="form-group">
                        {{ Form::label('email', 'Correo electrónico', ['class' => 'label']) }}
                        {{ Form::input('email', 'email', old('email'), ['required' => true, 'autofocus' => true, 'class' => 'input']) }}
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        {{ Form::submit('Enviar Link', ['class' => 'btn btn-green']) }}
                    </div>
                    <!-- /.form-group -->
                {{ Form::close() }}
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.wrapper -->
</section>
<!-- /#reset-email -->
@endsection
