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
                                    <span class="title"><a href="{{ url('producto/'.$product->variations->first()->slug) }}" class="link">{{ $product->title }}</a></span>
                                </td>
                                <!-- /.td -->
                                <td class="td">
                                    <span class="price">${{ $product->variations->first()->meta->sale_price }}</span>
                                </td>
                                <!-- /.td -->
                                <td class="td">
                                    <span class="stock">{{ $product->variations->first()->meta->stock }}</span>
                                </td>
                                <!-- /.td -->
                                <td class="td">
                                    <a href="{{ url('dashboard/productos/'.$product->slug.'/editar') }}" class="btn btn-green">Editar</a>
                                    {!! Form::open(['url' => url('dashboard/productos', $product->slug), 'method' => 'DELETE', 'class' => 'delete-form']) !!}
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
                <div class="info">Página {{ $products->currentPage() }} — Mostrando {{ $products->perPage() }} productos de {{ $products->total() }}</div>
                <!-- /.info -->
            </div>
            <!-- /.col-6 -->
            <div class="col-6">
                {{ $products->links() }}
            </div>
            <!-- /.col-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#pagination -->
</section>
<!-- /#dashboard-products -->
