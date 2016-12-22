<section id="dashboard-pages">
    <div class="row">
        <div class="col-7">
            <h1 class="section-title">Páginas</h1>
            <!-- /.title -->
        </div>
        <!-- /.col-7 -->
        <div class="col-5">
            <a href="{{ url('dashboard/paginas/nueva') }}" class="add btn btn-green">Agregar nueva</a>
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
                        <th class="th">Opciones</th>
                        <!-- /.th -->
                    </tr>
                    <!-- /.tr -->
                </thead>
                <!-- /.thead -->
                <tbody class="tbody">
                    @if (!$pages->isEmpty())
                        @foreach ($pages as $page)
                            <tr class="tr">
                                <td class="td">
                                    <span class="title"><a href="{{ url('pagina/'.$page->slug) }}" class="link">{{ $page->title }}</a></span>
                                </td>
                                <!-- /.td -->
                                <td class="td">
                                    <a href="{{ url('dashboard/paginas/'.$page->slug.'/editar') }}" class="btn btn-green">Editar</a>
                                    {!! Form::open(['url' => url('dashboard/paginas', $page->slug), 'method' => 'DELETE', 'class' => 'delete-form']) !!}
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
                <div class="info">Página {{ $pages->currentPage() }} — Mostrando {{ $pages->perPage() }} productos de {{ $pages->total() }}</div>
                <!-- /.info -->
            </div>
            <!-- /.col-6 -->
            <div class="col-6">
                {{ $pages->links() }}
            </div>
            <!-- /.col-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#pagination -->
</section>
<!-- /#dashboard-pages -->
