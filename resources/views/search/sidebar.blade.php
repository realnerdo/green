<aside id="sidebar">
    <section class="section categories">
        <h3 class="title">Mostrar resultados para</h3>
        <!-- /.title -->
        <ul class="list">
            <li class="item">
                <a href="{{ url('/') }}" class="link">Ropa (10)</a>
            </li>
            <!-- /.item -->
            <li class="item">
                <a href="{{ url('/') }}" class="link">Muebles (10)</a>
            </li>
            <!-- /.item -->
            <li class="item">
                <a href="{{ url('/') }}" class="link">Jardín (10)</a>
            </li>
            <!-- /.item -->
            <li class="item">
                <a href="{{ url('/') }}" class="link">Reciclados (10)</a>
            </li>
            <!-- /.item -->
        </ul>
        <!-- /.list -->
    </section>
    <!-- /.section categories -->
    <section class="section price">
        <h3 class="title">Precio</h3>
        <!-- /.title -->
        <input type="range" min="1" max="100">
    </section>
    <!-- /.section price -->
    <section class="section order">
        <h3 class="title">Ordenar por</h3>
        <!-- /.title -->
        <ul class="list">
            <li class="item">
                <a href="{{ asset('/') }}" class="link">Menor a mayor precio</a>
            </li>
            <!-- /.item -->
            <li class="item">
                <a href="{{ asset('/') }}" class="link">Mayor a menor precio</a>
            </li>
            <!-- /.item -->
            <li class="item">
                <a href="{{ asset('/') }}" class="link">Popularidad</a>
            </li>
            <!-- /.item -->
            <li class="item">
                <a href="{{ asset('/') }}" class="link">Mejor calificación</a>
            </li>
            <!-- /.item -->
            <li class="item">
                <a href="{{ asset('/') }}" class="link">Mejor opinión</a>
            </li>
            <!-- /.item -->
            <li class="item">
                <a href="{{ asset('/') }}" class="link">Lo más nuevo</a>
            </li>
            <!-- /.item -->
        </ul>
        <!-- /.list -->
    </section>
    <!-- /.section order -->
    <section class="section ratings">
        <h3 class="title">Calificación</h3>
        <!-- /.title -->
        @include('layout.stars')
    </section>
    <!-- /.section ratings -->
</aside>
<!-- /#sidebar -->
