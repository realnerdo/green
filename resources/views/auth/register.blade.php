@extends('layout.base')

@section('content')
<section id="register" class="section-auth">
    <div class="wrapper">
        <div class="col-12">
            <h1 class="section-title">Registrarse</h1>
            <!-- /.section-title -->
            {{ Form::open(['url' => '/register', 'class' => 'register-form form']) }}
                <div class="form-group">
                    {{ Form::label('firstname', 'Nombre(s)', ['class' => 'label']) }}
                    {{ Form::input('text', 'firstname', old('firstname'), ['class' => 'input']) }}
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    {{ Form::label('lastname', 'Apellido(s)', ['class' => 'label']) }}
                    {{ Form::input('text', 'lastname', old('lastname'), ['class' => 'input']) }}
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    {{ Form::label('username', 'Nombre de usuario', ['class' => 'label']) }}
                    {{ Form::input('text', 'username', old('username'), ['class' => 'input']) }}
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    {{ Form::label('email', 'Correo electrónico', ['class' => 'label']) }}
                    {{ Form::input('email', 'email', old('email'), ['class' => 'input']) }}
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    {{ Form::label('password', 'Contraseña', ['class' => 'label']) }}
                    {{ Form::input('password', 'password', null, ['class' => 'input']) }}
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    {{ Form::label('password', 'Confirmar contraseña', ['class' => 'label']) }}
                    {{ Form::input('password', 'password_confirmation', null, ['class' => 'input']) }}
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    {{ Form::submit('Registrase', ['class' => 'btn btn-green']) }}
                </div>
                <!-- /.form-group -->

            {{ Form::close() }}
        </div>
        <!-- /.col-12 -->
    </div>
    <!-- /.wrapper -->
</section>
<!-- /#register -->
@endsection
