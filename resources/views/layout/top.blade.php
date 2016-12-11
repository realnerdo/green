<header id="top">

    <div class="wrapper">
        <div class="row">
            <div class="col-12">
                <div class="col-7 no-padding">

                    <div id="main-logo">
                        <a href="{{ url('/') }}" class="link">
                            <img src="{{ asset('img/logo.svg') }}" alt="title" class="img">
                        </a><!-- /link -->
                    </div><!-- /logo -->

                    <div id="search">
                        {{ Form::open(['url' => '/']) }}
                            {{ Form::input('text', 'search') }}
                            {{ Form::select('category', ['Todas las categorías', 'Categoría de ejemplo', 'Otra categoría']) }}
                            {{ Form::submit('Buscar') }}
                        {{ Form::close() }}
                    </div><!-- /search -->

                </div><!-- /col-7 -->

                <div class="col-5">
                    <ul class="list">
                        <li class="item">
                            <a href="#" class="btn btn-green">Vender</a>
                        </li>
                        <li class="item">
                            <img src="{{ asset('img/notification-icon.svg') }}" alt="" class="icon">
                        </li>
                        <li class="item">
                            <img src="{{ asset('img/cart-icon.svg') }}" alt="" class="icon">
                        </li>
                        <li class="item">
                            <div class="profile">
                                <img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg" alt="" class="photo">
                                <img src="{{ asset('img/caret-down.svg') }}" alt="" class="icon">
                            </div><!-- /profile -->
                        </li>
                    </ul><!-- /list -->

                </div><!-- /col-5 -->

            </div><!-- /col-12 -->
        </div><!-- /row -->
    </div><!-- /wrapper -->

</header><!-- /top -->
