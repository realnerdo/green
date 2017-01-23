@extends('dashboard.layout.base')

@section('title', 'Ventas Verdes - Pedidos')

@section('dashboard-title', 'Mis pedidos')

@section('dashboard-content')
    @if($orders->isEmpty())
        <div class="row">
            <div class="col-12">
                <div class="empty">
                    <h2 class="title">Aún no hay pedidos</h2><!-- /.title -->
                </div><!-- /.empty -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    @else
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead class="thead">
                        <tr class="tr">
                            <th class="th">Fecha de pedido</th>
                            <!-- /.th -->
                            <th class="th">Fecha estimada de entrega</th>
                            <!-- /.th -->
                            <th class="th">Dirección de envío</th>
                            <!-- /.th -->
                            <th class="th">Método de pago</th>
                            <!-- /.th -->
                            <th class="th">Estado</th>
                            <!-- /.th -->
                            <th class="th">Total</th>
                            <!-- /.th -->
                        </tr>
                        <!-- /.tr -->
                    </thead>
                    <!-- /.thead -->
                    <tbody class="tbody">
                        @foreach ($orders as $order)
                            <tr class="tr">
                                <td class="td">{{ $order->created_at }}</td><!-- /.td -->
                                <td class="td">{{ $order->delivery_date }}</td><!-- /.td -->
                                <td class="td">{{ $order->address->address }}</td><!-- /.td -->
                                <td class="td">{{ $order->payment_method }}</td><!-- /.td -->
                                <td class="td">{{ $order->status }}</td><!-- /.td -->
                                <td class="td">{{ $order->cart->total }}</td><!-- /.td -->
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
                    <div class="info">Página {{ $orders->currentPage() }} — Mostrando {{ $orders->perPage() }} pedidos de {{ $orders->total() }}</div>
                    <!-- /.info -->
                </div>
                <!-- /.col-6 -->
                <div class="col-6">
                    {{ $orders->links() }}
                </div>
                <!-- /.col-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#pagination -->
    @endif
@endsection
