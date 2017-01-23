@extends('layout.base')

@section('title', 'Green - Gracias')

@section('front')
    <section id="thankyou">
        <div class="wrapper">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-title">¡Muchas gracias por tu compra!</h1>
                    <!-- /.title -->
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="text">
                        <p>Se te ha enviado un resumen de tu compra al correo: asaelx@gmail.com</p>
                        <p>Puedes revisar los detalles y el estado de tus compras en <a href="{{ url('dashboard/pedidos') }}" class="link">Mis pedidos</a></p>
                    </div>
                    <!-- /.text -->
                    <div class="summary">
                        <table class="table">
                            <thead class="thead">
                                <tr class="tr">
                                    <th class="th">Producto</th>
                                    <!-- /.th -->
                                    <th class="th">Precio</th>
                                    <!-- /.th -->
                                    <th class="th">Total</th>
                                    <!-- /.th -->
                                </tr>
                                <!-- /.tr -->
                            </thead>
                            <!-- /.thead -->
                            <tbody class="tbody">
                                @if (!$products->isEmpty())
                                    @foreach ($products as $product)
                                        <tr class="tr">
                                            <td class="td"><span class="title">{{ $product->variations->first()->title }} (2)</span></td>
                                            <!-- /.td -->
                                            <td class="td"><span class="price">${{ $product->variations->first()->meta->sale_price }}</span></td>
                                            <!-- /.td -->
                                            <td class="td"><span class="price">${{ $product->variations->first()->meta->sale_price * 2 }}</span></td>
                                            <!-- /.td -->
                                        </tr>
                                        <!-- /.tr -->
                                    @endforeach
                                @endif
                            </tbody>
                            <!-- /.tbody -->
                        </table>
                        <!-- /.table -->
                        <div class="totals">
                            <div class="row">
                                <div class="col-6"></div>
                                <!-- /.col-6 -->
                                <div class="col-6">
                                    <div class="subtotal row">
                                        <div class="col-8"><span class="title">Subtotal</span></div>
                                        <!-- /.col-8 -->
                                        <div class="col-4"><span class="price">$20800.00</span></div>
                                        <!-- /.col-4 -->
                                    </div>
                                    <!-- /.subtotal -->
                                    <div class="shipping row">
                                        <div class="col-8"><span class="title">Envío</span></div>
                                        <!-- /.col-8 -->
                                        <div class="col-4"><span class="price">$40.00</span></div>
                                        <!-- /.col-4 -->
                                    </div>
                                    <!-- /.shipping -->
                                    <div class="taxes row">
                                        <div class="col-8"><span class="title">Impuestos (IVA 16%)</span></div>
                                        <!-- /.col-8 -->
                                        <div class="col-4"><span class="price">$3334.40</span></div>
                                        <!-- /.col-4 -->
                                    </div>
                                    <!-- /.taxes -->
                                    <div class="total row">
                                        <div class="col-8"><span class="title">Total</span></div>
                                        <!-- /.col-8 -->
                                        <div class="col-4"><span class="price">$24174.40</span></div>
                                        <!-- /.col-4 -->
                                    </div>
                                    <!-- /.total -->
                                </div>
                                <!-- /.col-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.totals -->
                    </div>
                    <!-- /.summary -->
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.wrapper -->
    </section>
    <!-- /#store -->
@endsection
