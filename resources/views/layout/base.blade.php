<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title', 'Green')</title>
        {{ Html::style('css/app.css') }}
    </head>
    <body>
        @section('header')
            @include('layout.top')
            @include('layout.menu')
        @show

        @yield('content')

        @section('footer')
            @include('layout.footer')
        @show

        @if ( Config::get('app.debug') )
          <script type="text/javascript">
            document.write('<script src="//green.dev:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
          </script>
        @endif
    </body>
</html>
