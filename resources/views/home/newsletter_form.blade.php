{{ Form::open(['url' => '/'], ['class' => 'newsletter_form']) }}
    <span>Recibe promociones en tu correo electrónico</span>
    {{ Form::input('email', 'email') }}
    {{ Form::submit('Suscribirse') }}
{{ Form::close() }}
