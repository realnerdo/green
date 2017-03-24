<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title', 'Ventas Verdes')</title>
        {{ Html::style('css/app.css') }}
    </head>
    <body>
        @section('header')
            @include('layout.notifications')
            @include('layout.top')
            @include('layout.menu')
        @show

        @if(Auth::check())
            @yield('dashboard')
        @else
            @yield('auth')
        @endif

        @yield('front')

        @section('footer')
            @include('layout.footer')
        @show

        <script type="text/javascript" src="https://conektaapi.s3.amazonaws.com/v0.3.2/js/conekta.js"></script>
        {{ Html::script('js/app.js') }}
        @if ( Config::get('app.debug') )
          <script type="text/javascript">
            document.write('<script src="//ventasverdes.dev:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
          </script>
        @endif
    </body>
</html>
