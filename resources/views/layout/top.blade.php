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
                        {{ Form::open(['url' => '/', 'class' => 'search-form']) }}
                            {{ Form::input('search', 'search', null, ['class' => 'input', 'placeholder' => 'Buscar...']) }}
                            {{ Form::select('category', ['Todas las categorías', 'Categoría de ejemplo', 'Otra categoría'], null, ['class' => 'select']) }}
                            {{ Form::submit('Buscar', ['class' => 'btn btn-green']) }}
                        {{ Form::close() }}
                    </div><!-- /search -->

                </div><!-- /col-7 -->

                <div class="col-5 no-padding">
                    <ul class="list pull-right">
                        <li class="item">
                            <a href="#" class="sell btn btn-green">Vender</a>
                        </li>
                        <li class="item">
                            <img src="{{ asset('img/notification.svg') }}" alt="" class="icon">
                        </li>
                        <li class="item">
                            <a href="{{ url('carrito') }}" class="link">
                                <img src="{{ asset('img/cart.svg') }}" alt="" class="icon">
                            </a>
                        </li>
                        <li class="item">
                            <a href="{{ url('dashboard') }}" class="profile">
                                <div class="photo">
                                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg" alt="" class="img">
                                </div>
                                <!-- /.photo -->
                                <img src="{{ asset('img/caret-down.svg') }}" alt="" class="icon">
                            </a><!-- /profile -->
                        </li>
                    </ul><!-- /list -->

                </div><!-- /col-5 -->

            </div><!-- /col-12 -->
        </div><!-- /row -->
    </div><!-- /wrapper -->

</header><!-- /top -->
