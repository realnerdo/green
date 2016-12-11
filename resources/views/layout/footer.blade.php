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
                <div class="list">
                    <div class="item">
                        <div class="link">Registrarse</div>
                        <!-- /.link -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="link">Comenzar a vender</div>
                        <!-- /.link -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="link">Crea tu tienda</div>
                        <!-- /.link -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="link">Afiliados</div>
                        <!-- /.link -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="link">Preguntas frecuentes</div>
                        <!-- /.link -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="link">Ayuda</div>
                        <!-- /.link -->
                    </div>
                    <!-- /.item -->
                </div>
                <!-- /.list -->
            </div>
            <!-- /.col-2 -->
            <div class="col-2">
                <h3 class="title">Acerca de Green</h3>
                <!-- /.title -->
                <div class="list">
                    <div class="item">
                        <div class="link">Qué es Green</div>
                        <!-- /.link -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="link">Quiénes somos</div>
                        <!-- /.link -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="link">Publicidad</div>
                        <!-- /.link -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="link">Términos y condiciones</div>
                        <!-- /.link -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="link">Política de privacidad</div>
                        <!-- /.link -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="link">Soporte</div>
                        <!-- /.link -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="link">Contacto</div>
                        <!-- /.link -->
                    </div>
                    <!-- /.item -->
                </div>
                <!-- /.list -->
            </div>
            <!-- /.col-2 -->
            <div class="col-3">
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
            <!-- /.col-3 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-6">
                <span>&copy; Copyright 2016 - Green. Todos los derechos reservados.</span>
            </div>
            <!-- /.col-6 -->
            <div class="col-6">
                <div class="social">
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
    <!-- /.wrapper -->

</footer>
<!-- /#footer -->
