<aside id="sidebar">
    <section class="section customer">
        <ul class="list">
            <li class="item">
                <a href="{{ url('dashboard') }}" class="link">Resumen</a>
            </li>
            <!-- /.item -->
            @if(auth()->user()->role == 'seller')
                <li class="item">
                    <a href="{{ url('dashboard/productos') }}" class="link">Mis productos</a>
                </li>
                <!-- /.item -->
            @endif
            @if(auth()->user()->role != 'admin')
                <li class="item">
                    <a href="{{ url('dashboard/pedidos') }}" class="link">Mis pedidos</a>
                </li>
                <!-- /.item -->
                <li class="item">
                    <a href="{{ url('dashboard/colecciones') }}" class="link">Mis colecciones</a>
                </li>
                <!-- /.item -->
            @endif
            @if(auth()->user()->role == 'admin')
                <li class="item">
                    <a href="{{ url('dashboard/categorias') }}" class="link">Categorías</a>
                </li>
                <!-- /.item -->
                <li class="item">
                    <a href="{{ url('dashboard/paginas') }}" class="link">Páginas</a>
                </li>
                <!-- /.item -->
            @endif
            <li class="item">
                {{ Form::open(['url' => '/logout']) }}
                    <button type="submit" class="link">Cerrar sesión</button>
                {{ Form::close() }}
            </li>
            <!-- /.item -->
        </ul>
        <!-- /.list -->
    </section>
    <!-- /.section customer -->
</aside>
<!-- /#sidebar -->
