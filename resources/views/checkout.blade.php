@extends('layout.base')

@section('title', 'Ventas Verdes - Pago')

@section('front')
    <section id="checkout">
        <div class="wrapper">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-title">Completar pedido</h1>
                    <!-- /.title -->
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-6">
                    {{ Form::open(['url' => 'pago/conekta', 'class' => 'checkout_form form', 'id' => 'checkout_form']) }}
                        @php
                            $logged = auth()->check();
                        @endphp
                        <div class="shipping">
                            <h2 class="title">Datos de envío</h2>
                            <!-- /.title -->
                            <div id="shipping_form">
                                <div class="form-group">
                                    {{ Form::label('shipping[firstname]', 'Nombre(s)', ['class' => 'label']) }}
                                    {{ Form::input('text', 'shipping[firstname]', null, ['class' => 'input']) }}
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('shipping[lastname]', 'Apellido(s)', ['class' => 'label']) }}
                                    {{ Form::input('text', 'shipping[lastname]', null, ['class' => 'input']) }}
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('shipping[address]', 'Dirección', ['class' => 'label']) }}
                                    {{ Form::input('text', 'shipping[address]', null, ['class' => 'input']) }}
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('shipping[country]', 'País', ['class' => 'label']) }}
                                    {{ Form::select('shipping[country]', $countries, null, ['class' => 'select']) }}
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('shipping[state]', 'Estado', ['class' => 'label']) }}
                                    {{ Form::select('shipping[state]', $states, null, ['class' => 'select']) }}
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('shipping[city]', 'Ciudad', ['class' => 'label']) }}
                                    {{ Form::select('shipping[city]', $cities, null, ['class' => 'select']) }}
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('shipping[zipcode]', 'Código Postal', ['class' => 'label']) }}
                                    {{ Form::input('text', 'shipping[zipcode]', null, ['class' => 'input']) }}
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('shipping[phone]', 'Teléfono', ['class' => 'label']) }}
                                    {{ Form::input('text', 'shipping[phone]', null, ['class' => 'input']) }}
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('shipping[email]', 'Correo electrónico', ['class' => 'label']) }}
                                    {{ Form::input('text', 'shipping[email]', null, ['class' => 'input']) }}
                                </div>
                                <!-- /.form-group -->
                            </div><!-- /#shipping_form -->
                        </div>
                        <!-- /.shipping -->
                        <div class="payment-method">
                            <h2 class="title">Método de pago</h2>
                            <!-- /.title -->
                            <div class="form-group">
                                <div class="radio-button">
                                    {{ Form::radio('payment_method', 'card', true, ['id' => 'card', 'class' => 'radio checkbox_payment']) }}
                                    {{ Form::label('card', 'Tarjeta de crédito/débito') }}
                                </div><!-- /.radio-button -->
                                <div class="radio-button">
                                    {{ Form::radio('payment_method', 'oxxo_cash', null, ['id' => 'oxxo_cash', 'class' => 'radio checkbox_payment']) }}
                                    {{ Form::label('oxxo_cash', 'OXXO') }}
                                </div><!-- /.radio-button -->
                                <div class="radio-button">
                                    {{ Form::radio('payment_method', 'spei', null, ['id' => 'spei', 'class' => 'radio checkbox_payment']) }}
                                    {{ Form::label('spei', 'Transferencia Bancaria') }}
                                </div><!-- /.radio-button -->
                            </div><!-- /.form-group -->
                            <div data-payment="card" class="method-form">
                                <div class="form-group">
                                    <div class="info">
                                        <div class="card-errors"></div><!-- /.card-errors -->
                                    </div><!-- /.info -->
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('card[name]', 'Nombre del tarjetahabiente', ['class' => 'label']) }}
                                    {{ Form::input('text', null, null, ['class' => 'input', 'data-conekta' => 'card[name]']) }}
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('card[number]', 'Número de tarjeta', ['class' => 'label']) }}
                                    {{ Form::input('text', null, null, ['class' => 'input', 'data-conekta' => 'card[number]']) }}
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('card[cvc]', 'CVC', ['class' => 'label']) }}
                                    {{ Form::input('text', null, null, ['class' => 'input', 'data-conekta' => 'card[cvc]']) }}
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('card[exp_month]', 'Mes de expiración (MM)', ['class' => 'label']) }}
                                    {{ Form::input('text', null, null, ['class' => 'input', 'data-conekta' => 'card[exp_month]']) }}
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('card[exp_year]', 'Año de expiración (YYYY)', ['class' => 'label']) }}
                                    {{ Form::input('text', null, null, ['class' => 'input', 'data-conekta' => 'card[exp_year]']) }}
                                </div><!-- /.form-group -->
                            </div><!-- /#credit_card -->
                            <div data-payment="oxxo_cash" class="method-form">
                                <div class="info form-group">
                                    <p>Por favor realiza el pago en el OXXO más cercano utilizando la ficha de pago.</p>
                                </div><!-- /.info -->
                            </div><!-- /#oxxo_cash -->
                            <div data-payment="spei" class="method-form">
                                <div class="info form-group">
                                    <p>Por favor realiza el pago el portal de tu banco utilizando la ficha de pago.</p>
                                </div><!-- /.info -->
                            </div><!-- /#spei -->
                        </div><!-- /.payment-method -->
                        <div class="billing">
                            <div id="billing_form">
                                <h2 class="title">Datos de facturación</h2>
                                <!-- /.title -->
                                <div class="form-group">
                                    {{ Form::label('billing[firstname]', 'Nombre(s)', ['class' => 'label']) }}
                                    {{ Form::input('text', 'billing[firstname]', null, ['class' => 'input']) }}
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('billing[lastname]', 'Apellido(s)', ['class' => 'label']) }}
                                    {{ Form::input('text', 'billing[lastname]', null, ['class' => 'input']) }}
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('billing[address]', 'Dirección', ['class' => 'label']) }}
                                    {{ Form::input('text', 'billing[address]', null, ['class' => 'input']) }}
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('billing[country]', 'País', ['class' => 'label']) }}
                                    {{ Form::select('billing[country]', $countries, null, ['class' => 'select']) }}
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('billing[state]', 'Estado', ['class' => 'label']) }}
                                    {{ Form::select('billing[state]', $states, null, ['class' => 'select']) }}
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('billing[city]', 'Ciudad', ['class' => 'label']) }}
                                    {{ Form::select('billing[city]', $cities, null, ['class' => 'select']) }}
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('billing[zipcode]', 'Código Postal', ['class' => 'label']) }}
                                    {{ Form::input('text', 'billing[zipcode]', null, ['class' => 'input']) }}
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('billing[phone]', 'Teléfono', ['class' => 'label']) }}
                                    {{ Form::input('text', 'billing[phone]', null, ['class' => 'input']) }}
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('billing[email]', 'Correo electrónico', ['class' => 'label']) }}
                                    {{ Form::input('text', 'billing[email]', null, ['class' => 'input']) }}
                                </div>
                                <!-- /.form-group -->
                            </div><!-- /#billing_form -->
                        </div><!-- /.billing -->
                    {{ Form::close() }}
                </div>
                <!-- /.col-6 -->
                <div class="col-6">
                    <h2 class="title">Resumen de compra</h2>
                    <!-- /.title -->
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
                            <tbody>
                                @if (!$cart->quantities->isEmpty())
                                    @foreach ($cart->quantities as $item)
                                        @php
                                            $price = (!is_null($item->product->sale_price)) ? $item->product->sale_price : $item->product->regular_price;
                                        @endphp
                                        <tr>
                                            <td><span class="title">{{ $item->product->title }} ({{ $item->quantity }})</span></td>
                                            <td>
                                                <span class="price">
                                                    <span class="currency-symbol">$</span>
                                                    <span class="product-price">{{ $price }}</span>
                                                </span>
                                            </td>
                                            <td>
                                                <span class="price">
                                                    <span class="currency-symbol">$</span>
                                                    <span class="product-total">{{ $item->quantity * $price }}</span>
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        <!-- /.table -->
                        <div class="totals">
                            <div class="subtotal row">
                                <div class="col-8"><span class="title">Subtotal</span></div>
                                <!-- /.col-8 -->
                                <div class="col-4">
                                    <span class="price">
                                        <span class="currency-symbol">$</span>
                                        <span class="subtotal-price">{{ $cart->subtotal }}</span>
                                    </span>
                                </div>
                                <!-- /.col-4 -->
                            </div>
                            <!-- /.subtotal -->
                            <div class="shipping row">
                                <div class="col-8"><span class="title">Envío</span></div>
                                <!-- /.col-8 -->
                                <div class="col-4">
                                    {{ Form::select('shipping_method', $rates, null, ['class' => 'select']) }}
                                </div><!-- /.col-4 -->
                            </div>
                            <!-- /.shipping -->
                            <div class="total row">
                                <div class="col-8"><span class="title">Total</span></div>
                                <!-- /.col-8 -->
                                <div class="col-4"><span class="price">$24174.40</span></div>
                                <!-- /.col-4 -->
                            </div>
                            <!-- /.total -->
                            <div class="place-order row">
                                <div class="col-12">
                                    <button class="btn btn-green" id="submit">Pagar</button>
                                    {{-- <a href="{{ url('gracias') }}" class="btn btn-green">Pagar</a> --}}
                                </div>
                                <!-- /.col-12 -->
                            </div>
                            <!-- /.place-order -->
                        </div>
                        <!-- /.totals -->
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
