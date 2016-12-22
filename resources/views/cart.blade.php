@extends('layout.base')

@section('title', 'Green - Carrito')

@section('content')
    <section id="cart">
        <div class="wrapper">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-title">Carrito de compras</h1>
                    <!-- /.title -->
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead class="thead">
                            <tr class="tr">
                                <th class="th">Foto</th>
                                <!-- /.th -->
                                <th class="th">Producto</th>
                                <!-- /.th -->
                                <th class="th">Precio</th>
                                <!-- /.th -->
                                <th class="th">Cantidad</th>
                                <!-- /.th -->
                                <th class="th">Total</th>
                                <!-- /.th -->
                                <th class="th">Eliminar</th>
                                <!-- /.th -->
                            </tr>
                            <!-- /.tr -->
                        </thead>
                        <!-- /.thead -->
                        <tbody class="tbody">
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
                                        <span class="title">{{ $product->variations->first()->title }}</span>
                                    </td>
                                    <!-- /.td -->
                                    <td class="td">
                                        <span class="price">${{ $product->variations->first()->meta->sale_price }}</span>
                                    </td>
                                    <!-- /.td -->
                                    <td class="td">
                                        <div class="quantity">
                                            <input type="number" class="qty input" name="qty" value="1">
                                        </div>
                                        <!-- /.qty -->
                                    </td>
                                    <!-- /.td -->
                                    <td class="td">
                                        <span class="price">${{ $product->variations->first()->meta->sale_price }}</span>
                                    </td>
                                    <!-- /.td -->
                                    <td class="td">
                                        <button class="btn btn-red">Eliminar</button>
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
            <div class="row">
                <div class="col-6 no-padding"></div>
                <!-- /.col-6 -->
                <div class="col-6">
                    <div class="summary">
                        <div class="subtotal row">
                            <div class="col-8"><span class="title">Subtotal</span></div>
                            <!-- /.col-8 -->
                            <div class="col-4"><span class="price">$100</span></div>
                            <!-- /.col-4 -->
                        </div>
                        <!-- /.subtotal -->
                        <div class="shipping row">
                            <div class="col-8"><span class="title">Envío</span></div>
                            <!-- /.col-8 -->
                            <div class="col-4"><span class="price">$100</span></div>
                            <!-- /.col-4 -->
                        </div>
                        <!-- /.shipping -->
                        <div class="taxes row">
                            <div class="col-8"><span class="title">Impuestos</span></div>
                            <!-- /.col-8 -->
                            <div class="col-4"><span class="price">$100</span></div>
                            <!-- /.col-4 -->
                        </div>
                        <!-- /.taxes -->
                        <div class="total row">
                            <div class="col-8"><span class="title">Total</span></div>
                            <!-- /.col-8 -->
                            <div class="col-4"><span class="price">$150</span></div>
                            <!-- /.col-4 -->
                        </div>
                        <!-- /.total -->
                        <div class="place-order row">
                            <div class="col-12">
                                {{-- <button class="btn btn-green">Proceder al pago</button> --}}
                                <a href="{{ url('pago') }}" class="btn btn-green">Proceder al pago</a>
                            </div>
                            <!-- /.col-12 -->
                        </div>
                        <!-- /.place-order -->
                    </div>
                    <!-- /.summary -->
                </div>
                <!-- /.col-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.wrapper -->
    </section>
    <!-- /#store -->
@endsection
