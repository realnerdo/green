<footer id="footer">
    <div class="wrapper">
        <div class="row">
            <div class="col-2"></div>
            <!-- /.col-2 -->
            <div class="col-2">
                <h3 class="title">Comprar</h3>
                <!-- /.title -->
                <ul class="list">
                    <li class="item">
                        <a href="{{ url('/') }}" class="link">Registrarse</a>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <a href="{{ url('/') }}" class="link">Tiendas</a>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <a href="{{ url('/') }}" class="link">Ofertas</a>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <a href="{{ url('/') }}" class="link">Colecciones</a>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <a href="{{ url('/') }}" class="link">Staff Picks</a>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <a href="{{ url('/') }}" class="link">Preguntas frecuentes</a>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <a href="{{ url('/') }}" class="link">Ayuda</a>
                    </li>
                    <!-- /.item -->
                </ul>
                <!-- /.list -->
            </div>
            <!-- /.col-2 -->
            <div class="col-2">
                <h3 class="title">Vender</h3>
                <!-- /.title -->
                <ul class="list">
                    <li class="item">
                        <a href="#" class="link">Registrarse</a>
                        <!-- /.link -->
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <a href="#" class="link">Comenzar a vender</a>
                        <!-- /.link -->
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <a href="#" class="link">Crea tu tienda</a>
                        <!-- /.link -->
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <a href="#" class="link">Afiliados</a>
                        <!-- /.link -->
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <a href="#" class="link">Preguntas frecuentes</a>
                        <!-- /.link -->
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <a href="#" class="link">Ayuda</a>
                        <!-- /.link -->
                    </li>
                    <!-- /.item -->
                </ul>
                <!-- /.list -->
            </div>
            <!-- /.col-2 -->
            <div class="col-2">
                <h3 class="title">Acerca de Green</h3>
                <!-- /.title -->
                <ul class="list">
                    <li class="item">
                        <a href="#" class="link">Qué es Green</a>
                        <!-- /.link -->
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <a href="#" class="link">Quiénes somos</a>
                        <!-- /.link -->
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <a href="#" class="link">Publicidad</a>
                        <!-- /.link -->
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <a href="#" class="link">Términos y condiciones</a>
                        <!-- /.link -->
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <a href="#" class="link">Política de privacidad</a>
                        <!-- /.link -->
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <a href="#" class="link">Soporte</a>
                        <!-- /.link -->
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <a href="#" class="link">Contacto</a>
                        <!-- /.link -->
                    </li>
                    <!-- /.item -->
                </ul>
                <!-- /.list -->
            </div>
            <!-- /.col-2 -->
            <div class="col-4">
                <h3 class="title">Newsletter</h3>
                <!-- /.title -->
                <div class="newsletter">
                    <div class="row">
                        @include('home.newsletter_form')
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        @include('home.newsletter_payments')
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.newsletter -->
            </div>
            <!-- /.col-4 -->
        </div>
        <!-- /.row -->
        <div class="bottom">
            <div class="row">
                <div class="col-6">
                    <span class="copyright">&copy; Copyright 2016 - Green. Todos los derechos reservados.</span>
                </div>
                <!-- /.col-6 -->
                <div class="col-6">
                    <div class="social pull-right">
                        <ul class="list">
                            <li class="item">
                                <a href="#" class="link">
                                    <img src="{{ asset('img/facebook.svg') }}" alt="Facebook" class="img">
                                </a>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                                <a href="#" class="link">
                                    <img src="{{ asset('img/twitter.svg') }}" alt="Twitter" class="img">
                                </a>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                                <a href="#" class="link">
                                    <img src="{{ asset('img/instagram.svg') }}" alt="Instagram" class="img">
                                </a>
                            </li>
                            <!-- /.item -->
                        </ul>
                        <!-- /.list -->
                    </div>
                    <!-- /.social -->
                </div>
                <!-- /.col-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.bottom -->
    </div>
    <!-- /.wrapper -->

</footer>
<!-- /#footer -->
