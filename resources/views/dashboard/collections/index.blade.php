@extends('dashboard.layout.base')

@section('title', 'Ventas Verdes - Colecciones')

@section('dashboard-title', 'Mis colecciones')

@section('dashboard-buttons')
    <div class="buttons">
        <a href="{{ url('dashboard/colecciones/nuevo') }}" class="add btn btn-green">Crear nueva</a>
    </div><!-- /.buttons -->
@endsection

@section('dashboard-content')
    @if($collections->isEmpty())
        <div class="row">
            <div class="col-12">
                <div class="empty">
                    <h2 class="title">Aún no hay colecciones</h2><!-- /.title -->
                </div><!-- /.empty -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    @else
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead class="thead">
                        <tr class="tr">
                            <th class="th">Portada</th>
                            <!-- /.th -->
                            <th class="th">Título</th>
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
                        @foreach ($collections as $collection)
                            <tr class="tr">
                                <td class="td">
                                    <div class="photo">
                                        <img src="{{ $collection->medias->first()->url }}" alt="{{ $collection->title }}" class="img">
                                    </div>
                                    <!-- /.photo -->
                                </td>
                                <!-- /.td -->
                                <td class="td">{{ $collection->title }}</td>
                                <!-- /.td -->
                                <td class="td">{{ $collection->products()->count() }}</td><!-- /.td -->
                                <td class="td">
                                    <a href="{{ url('dashboard/colecciones/'.$collection->slug.'/editar') }}" class="btn btn-green">Editar</a>
                                    {!! Form::open(['url' => url('dashboard/colecciones', $collection->slug), 'method' => 'DELETE', 'class' => 'delete-form']) !!}
                                        <button type="submit" class="btn btn-red">Eliminar</button>
                                    {!! Form::close() !!}
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
                    <div class="info">Página {{ $collections->currentPage() }} — Mostrando {{ $collections->perPage() }} colecciones de {{ $collections->total() }}</div>
                    <!-- /.info -->
                </div>
                <!-- /.col-6 -->
                <div class="col-6">
                    {{ $collections->links() }}
                </div>
                <!-- /.col-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#pagination -->
    @endif
@endsection
