<section id="dashboard-products">
    <div class="row">
        <div class="col-7">
            <h1 class="section-title">Mis Productos</h1>
            <!-- /.title -->
        </div>
        <!-- /.col-7 -->
        <div class="col-5">
            <a href="{{ url('dashboard/productos/nuevo') }}" class="add btn btn-green">Agregar nuevo</a>
        </div>
        <!-- /.col-5 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead class="thead">
                    <tr class="tr">
                        <th class="th">Foto</th>
                        <!-- /.th -->
                        <th class="th">Título</th>
                        <!-- /.th -->
                        <th class="th">Precio</th>
                        <!-- /.th -->
                        <th class="th">En existencia</th>
                        <!-- /.th -->
                        <th class="th">Opciones</th>
                        <!-- /.th -->
                    </tr>
                    <!-- /.tr -->
                </thead>
                <!-- /.thead -->
                <tbody class="tbody">
                    @if (!$products->isEmpty())
                        @foreach ($products as $product)
                            <tr class="tr">
                                <td class="td">
                                    <div class="photo">
                                        <img src="{{ $product->medias->first()->url }}" alt="Título" class="img">
                                    </div>
                                    <!-- /.photo -->
                                </td>
                                <!-- /.td -->
                                <td class="td">
                                    <span class="title">{{ $product->title }}</span>
                                </td>
                                <!-- /.td -->
                                <td class="td">
                                    <span class="price">${{ $product->price }}</span>
                                </td>
                                <!-- /.td -->
                                <td class="td">
                                    <span class="stock">28</span>
                                </td>
                                <!-- /.td -->
                                <td class="td">
                                    <a href="{{ url('dashboard/productos/'.$product->slug.'/editar') }}" class="btn btn-green">Editar</a>
                                    {!! Form::open(['url' => url('dashboard/productos', $product->slug), 'method' => 'DELETE']) !!}
                                        <button type="submit" class="btn btn-red">Eliminar</button>
                                    {!! Form::close() !!}
                                </td>
                                <!-- /.td -->
                            </tr>
                            <!-- /.tr -->
                        @endforeach
                    @endif
                </tbody>
                <!-- /.tbody -->
            </table>
            <!-- /.table -->
        </div>
        <!-- /.col-12 -->
    </div>
    <!-- /.row -->
    <div id="pagination">
        <div class="row">
            <div class="col-6">
                <div class="info">Página 1 — Mostrando productos 1-5 de 28</div>
                <!-- /.info -->
            </div>
            <!-- /.col-6 -->
            <div class="col-6">
                <ul class="list">
                    <li class="item">
                        <a href="#" class="link btn btn-green"><<</a>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <a href="#" class="link btn btn-green"><</a>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <span class="active btn btn-gray">1</span>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <a href="#" class="link btn btn-green">2</a>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <a href="#" class="link btn btn-green">3</a>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <a href="#" class="link btn btn-green">></a>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <a href="#" class="link btn btn-green">>></a>
                    </li>
                    <!-- /.item -->
                </ul>
                <!-- /.list -->
            </div>
            <!-- /.col-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#pagination -->
</section>
<!-- /#dashboard-products -->
