@extends('layout.base')

@section('auth')
<section id="login" class="section-auth">
    <div class="wrapper">
        <div class="row">
            <div class="col-12">
                <h1 class="section-title">Iniciar sesión</h1>
                <!-- /.title -->
                {{ Form::open(['url' => '/login', 'class' => 'login_form form']) }}
                    <div class="form-group">
                        {{ Form::label('username', 'Nombre de usuario', ['class' => 'label']) }}
                        {{ Form::input('text', 'username', old('username'), ['required' => true, 'autofocus' => true, 'class' => 'input']) }}
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        {{ Form::label('password', 'Contraseña', ['class' => 'label']) }}
                        {{ Form::input('password', 'password', null, ['required' => true, 'class' => 'input']) }}
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        {{ Form::checkbox('remember') }} Recuérdame
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        {{ Form::submit('Entrar', ['class' => 'btn btn-green']) }}
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        {{ Html::link('/register', '¿No tienes cuenta? Regístrate aquí.', ['class' => 'link']) }} — {{ Html::link('/password/reset', '¿Olvidaste tu contraseña?', ['class' => 'link']) }}
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
<!-- /#login -->
@endsection
