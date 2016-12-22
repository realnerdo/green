{{ Form::open(['url' => '/', 'class' => 'newsletter_form']) }}
    <span>Recibe promociones en tu correo electrónico</span>
    <div class="input-wrapper">
        {{ Form::input('email', 'email', null, ['class' => 'input', 'placeholder' => 'ejemplo@correo.com']) }}
        {{ Form::submit('Suscribirse', ['class' => 'btn btn-green']) }}
    </div>
    <!-- /.input-wrapper -->
{{ Form::close() }}
