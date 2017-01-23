@extends('dashboard.layout.base')

@section('title', 'Ventas Verdes - Categorías')

@section('dashboard-title', 'Catálogo de categorías')

@section('dashboard-buttons')
    <div class="buttons">
        <a href="{{ url('dashboard/categorias/nuevo') }}" class="add btn btn-green">Agregar nueva</a>
    </div><!-- /.buttons -->
@endsection

@section('dashboard-content')
    @if($categories->isEmpty())
        <div class="row">
            <div class="col-12">
                <div class="empty">
                    <h2 class="title">Aún no hay categorías</h2><!-- /.title -->
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
                            <th class="th">Descripción</th>
                            <!-- /.th -->
                            <th class="th">Productos</th>
                            <!-- /.th -->
                            <th class="th">Opciones</th>
                            <!-- /.th -->
                        </tr>
                        <!-- /.tr -->
                    </thead>
                    <!-- /.thead -->
                    <tbody class="tbody">
                        @foreach ($categories as $category)
                            <tr class="tr">
                                <td class="td">{{ $category->title }}</td>
                                <!-- /.td -->
                                <td class="td">{{ $category->description }}</td><!-- /.td -->
                                <td class="td">{{ $category->products()->count() }}</td><!-- /.td -->
                                <td class="td">
                                    <a href="{{ url('dashboard/categorias/'.$category->slug.'/editar') }}" class="btn btn-green">Editar</a>
                                    @if($category->products()->count() == 0)
                                        {!! Form::open(['url' => url('dashboard/categorias', $category->slug), 'method' => 'DELETE', 'class' => 'delete-form']) !!}
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
                    <div class="info">Página {{ $categories->currentPage() }} — Mostrando {{ $categories->perPage() }} categorías de {{ $categories->total() }}</div>
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
    @endif
@endsection
