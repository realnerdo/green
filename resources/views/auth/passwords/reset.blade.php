@extends('layout.base')

@section('content')
<section id="reset" class="section-auth">
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

                {{ Form::open(['url' => '/password/reset', 'class' => 'reset-form form']) }}
                    <div class="form-group">
                        {{ Form::label('email', 'Correo electrónico') }}
                        {{ Form::input('email', 'email', $email or old('email'), ['required' => true, 'autofocus' => true, 'class' => 'input']) }}
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        {{ Form::label('password', 'Nueva contraseña') }}
                        {{ Form::input('password', 'password', null, ['required' => true, 'class' => 'input']) }}
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        {{ Form::label('password', 'Confirmar contraseña') }}
                        {{ Form::input('password', 'password_confirmation', null, ['required' => true, 'class' => 'input']) }}
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        {{ Form::submit('Guardar nueva contraseña', ['class' => 'btn btn-green']) }}
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
<!-- /#reset -->
@endsection
