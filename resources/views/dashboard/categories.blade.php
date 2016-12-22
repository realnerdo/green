<section id="dashboard-categories">
    <div class="row">
        <div class="col-7">
            <h1 class="section-title">Categorías</h1>
            <!-- /.title -->
        </div>
        <!-- /.col-7 -->
        <div class="col-5">
            <a href="{{ url('dashboard/categorias/nueva') }}" class="add btn btn-green">Agregar nueva</a>
        </div>
        <!-- /.col-5 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead class="thead">
                    <tr class="tr">
                        <th class="th">Título</th>
                        <!-- /.th -->
                        <th class="th">Descripción</th>
                        <!-- /.th -->
                        <th class="th">Opciones</th>
                        <!-- /.th -->
                    </tr>
                    <!-- /.tr -->
                </thead>
                <!-- /.thead -->
                <tbody class="tbody">
                    @if (!$categories->isEmpty())
                        @foreach ($categories as $category)
                            <tr class="tr">
                                <td class="td">
                                    <span class="title"><a href="{{ url('categoria/'.$category->slug) }}" class="link">{{ $category->title }}</a></span>
                                </td>
                                <!-- /.td -->
                                <td class="td">
                                    <span>{{ $category->description }}</span>
                                </td>
                                <!-- /.td -->
                                <td class="td">
                                    <a href="{{ url('dashboard/categorias/'.$category->slug.'/editar') }}" class="btn btn-green">Editar</a>
                                    {!! Form::open(['url' => url('dashboard/categorias', $category->slug), 'method' => 'DELETE', 'class' => 'delete-form']) !!}
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
                <div class="info">Página {{ $categories->currentPage() }} — Mostrando {{ $categories->perPage() }} productos de {{ $categories->total() }}</div>
                <!-- /.info -->
            </div>
            <!-- /.col-6 -->
            <div class="col-6">
                {{ $categories->links() }}
            </div>
            <!-- /.col-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#pagination -->
</section>
<!-- /#dashboard-categories -->
