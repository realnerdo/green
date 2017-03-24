@extends('layout.base')

@section('title', 'Ventas Verdes - Carrito')

@section('front')
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
            @if ($cart->quantities->isEmpty())
                <div class="row">
                    <div class="col-12">
                        <h2 class="title">Tu carrito está vacío :(</h2>
                        <!-- /.title -->
                        <div class="text">
                            <p>Puedes explorar explorar productos y agregarlos a tu carrito en la <a href="{{ url('busqueda') }}" class="link">Tienda</a></p>
                        </div>
                        <!-- /.text -->
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            @else
                {{ Form::open(['url' => url('carrito', $cart->id), 'method' => 'PATCH']) }}
                    <div class="row">
                        <div class="col-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Foto</th>
                                        <th>Producto</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Total</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart->quantities as $item)
                                        @php
                                            $price = (!is_null($item->product->sale_price)) ? $item->product->sale_price : $item->product->regular_price;
                                        @endphp
                                        <tr>
                                            <td data-th="Foto">
                                                <div class="photo">
                                                    <img src="{{ $item->product->medias->first()->url }}" alt="{{ $item->product->title }}" class="img">
                                                </div>
                                                <!-- /.photo -->
                                            </td>
                                            <td data-th="Producto">
                                                <span class="title">{{ $item->product->title }}</span>
                                            </td>
                                            <td data-th="Precio">
                                                <span class="price">
                                                    <span class="currency-symbol">$</span>
                                                    <span class="product-price" data-price="{{ $price }}">{{ $price }}</span>
                                                </span>
                                            </td>
                                            <td data-th="Cantidad">
                                                <div class="quantity">
                                                    <input type="number" class="qty input" name="qty" value="{{ $item->quantity }}" min="1">
                                                </div>
                                                <!-- /.qty -->
                                            </td>
                                            <td data-th="Total">
                                                <span class="price">
                                                    <span class="currency-symbol">$</span>
                                                    <span class="product-total">{{ $item->quantity * $price }}</span>
                                                </span>
                                            </td>
                                            <td data-th="Opciones">
                                                <button class="btn btn-red delete-item" data-token="{{ csrf_token() }}" data-id="{{ $item->id }}">Eliminar</button>
                                                {{ Form::hidden('quantities['.$item->id.'][quantity]', $item->quantity) }}
                                                {{ Form::hidden('quantities['.$item->id.'][product_id]', $item->product->id) }}
                                                {{ Form::hidden('quantities['.$item->id.'][cart_id]', $item->cart->id) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4" class="text-right"><b>Subtotal</b></td>
                                        <td colspan="2">
                                            <span class="price">
                                                <span class="currency-symbol">$</span>
                                                <span class="subtotal">0.00</span>
                                            </span>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <!-- /.table -->
                        </div><!-- /.col-12 -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-green pull-right">Proceder al pago</button>
                        </div><!-- /.col-12 -->
                    </div><!-- /.row -->
                {{ Form::close() }}
            @endif
        </div>
        <!-- /.wrapper -->
    </section>
    <!-- /#store -->
@endsection
