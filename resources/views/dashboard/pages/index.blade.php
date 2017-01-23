@extends('dashboard.layout.base')

@section('title', 'Ventas Verdes - Páginas')

@section('dashboard-title', 'Páginas')

@section('dashboard-buttons')
    <div class="buttons">
        <a href="{{ url('dashboard/paginas/nuevo') }}" class="add btn btn-green">Agregar nueva</a>
    </div><!-- /.buttons -->
@endsection

@section('dashboard-content')
    @if($pages->isEmpty())
        <div class="row">
            <div class="col-12">
                <div class="empty">
                    <h2 class="title">Aún no hay páginas</h2><!-- /.title -->
                </div><!-- /.empty -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    @else
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
                        @foreach ($pages as $page)
                            <tr class="tr">
                                <td class="td">{{ $page->title }}</td>
                                <!-- /.td -->
                                <td class="td">
                                    <a href="{{ url('dashboard/paginas/'.$page->slug.'/editar') }}" class="btn btn-green">Editar</a>
                                    @if($page->products()->count() == 0)
                                        {!! Form::open(['url' => url('dashboard/paginas', $page->slug), 'method' => 'DELETE', 'class' => 'delete-form']) !!}
                                            <button type="submit" class="btn btn-red">Eliminar</button>
                                        {!! Form::close() !!}
                                    @endif
                                </td>
                                <!-- /.td -->
                            </tr>
                            <!-- /.tr -->
                        @endforeach
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
                    <div class="info">Página {{ $pages->currentPage() }} — Mostrando {{ $pages->perPage() }} páginas de {{ $pages->total() }}</div>
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
    @endif
@endsection
