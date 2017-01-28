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
                    <div class="billing">
                        <h2 class="title">Datos de facturación</h2>
                        <!-- /.title -->
                        {{ Form::open(['url' => '/', 'class' => 'billing_form form']) }}
                            <div class="form-group">
                                {{ Form::label('firstname', 'Nombre(s)', ['class' => 'label']) }}
                                {{ Form::input('text', 'firstname', 'Asael', ['class' => 'input']) }}
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                {{ Form::label('lastname', 'Apellido(s)', ['class' => 'label']) }}
                                {{ Form::input('text', 'lastname', 'Chávez Jaimes', ['class' => 'input']) }}
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                {{ Form::label('email', 'Correo electrónico', ['class' => 'label']) }}
                                {{ Form::input('email', 'email', 'asaelx@gmail.com', ['class' => 'input']) }}
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                {{ Form::label('phone', 'Teléfono', ['class' => 'label']) }}
                                {{ Form::input('text', 'phone', '9993708552', ['class' => 'input']) }}
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                {{ Form::label('address', 'Dirección', ['class' => 'label']) }}
                                {{ Form::input('text', 'address', 'Calle 3C #284 Residencial Galerías', ['class' => 'input']) }}
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                {{ Form::label('country', 'País', ['class' => 'label']) }}
                                {{ Form::select('country', ['México', '2', '3'], null, ['class' => 'select']) }}
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                {{ Form::label('state', 'Estado', ['class' => 'label']) }}
                                {{ Form::select('state', ['Yucatán', '2', '3'], null, ['class' => 'select']) }}
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                {{ Form::label('city', 'Ciudad', ['class' => 'label']) }}
                                {{ Form::select('city', ['Mérida', '2', '3'], null, ['class' => 'select']) }}
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                {{ Form::label('zipcode', 'Código Postal', ['class' => 'label']) }}
                                {{ Form::input('text', 'zipcode', '97203', ['class' => 'input']) }}
                            </div>
                            <!-- /.form-group -->
                        {{ Form::close() }}
                    </div>
                    <!-- /.billing -->
                    <div class="shipping">
                        <h2 class="title">Datos de envío</h2>
                        <!-- /.title -->
                        {{ Form::open(['url' => '/', 'class' => 'billing_form form']) }}
                            <div class="form-group">
                                {{ Form::label('firstname', 'Nombre(s)', ['class' => 'label']) }}
                                {{ Form::input('text', 'firstname', 'Asael', ['class' => 'input']) }}
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                {{ Form::label('lastname', 'Apellido(s)', ['class' => 'label']) }}
                                {{ Form::input('text', 'lastname', 'Chávez Jaimes', ['class' => 'input']) }}
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                {{ Form::label('email', 'Correo electrónico', ['class' => 'label']) }}
                                {{ Form::input('email', 'email', 'asaelx@gmail.com', ['class' => 'input']) }}
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                {{ Form::label('phone', 'Teléfono', ['class' => 'label']) }}
                                {{ Form::input('text', 'phone', '9993708552', ['class' => 'input']) }}
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                {{ Form::label('address', 'Dirección', ['class' => 'label']) }}
                                {{ Form::input('text', 'address', 'Calle 3C #284 Residencial Galerías', ['class' => 'input']) }}
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                {{ Form::label('country', 'País', ['class' => 'label']) }}
                                {{ Form::select('country', ['México'], null, ['class' => 'select']) }}
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                {{ Form::label('state', 'Estado', ['class' => 'label']) }}
                                {{ Form::select('state', ['Yucatán'], null, ['class' => 'select']) }}
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                {{ Form::label('city', 'Ciudad', ['class' => 'label']) }}
                                {{ Form::select('city', ['Mérida'], null, ['class' => 'select']) }}
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                {{ Form::label('zipcode', 'Código Postal', ['class' => 'label']) }}
                                {{ Form::input('text', 'zipcode', '97203', ['class' => 'input']) }}
                            </div>
                            <!-- /.form-group -->
                        {{ Form::close() }}
                    </div>
                    <!-- /.shipping -->
                    <div class="payment-method">
                        <h2 class="title">Método de pago</h2>
                        <!-- /.title -->
                        <div class="credit-card">
                            {{ Form::open(['url' => '/', 'class' => 'credit-card-form form']) }}
                                <div class="form-group">
                                    {{ Form::label('name', 'Nombre', ['class' => 'label']) }}
                                    {{ Form::input('text', 'name', 'Asael Chávez Jaimes', ['class' => 'input']) }}
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('address', 'Dirección', ['class' => 'label']) }}
                                    {{ Form::input('text', 'address', 'Calle Plutón Mz 2 Lt 8 Valle del Sol', ['class' => 'input']) }}
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('card', 'Número de tarjeta', ['class' => 'label']) }}
                                    {{ Form::input('text', 'card', '4242 4242 4242 4242', ['class' => 'input']) }}
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('expired', 'Fecha de caducidad', ['class' => 'label']) }}
                                    <div class="row">
                                        <div class="col-6">
                                            {{ Form::input('text', 'month', '07', ['class' => 'input']) }}
                                        </div>
                                        <!-- /.col-6 -->
                                        <div class="col-6">
                                            {{ Form::input('text', 'year', '2020', ['class' => 'input']) }}
                                        </div>
                                        <!-- /.col-6 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    {{ Form::label('cvc', 'CVC', ['class' => 'label']) }}
                                    {{ Form::input('text', 'cvc', '789', ['class' => 'input']) }}
                                </div>
                                <!-- /.form-group -->
                            {{ Form::close() }}
                        </div>
                        <!-- /.credit-card -->
                    </div>
                    <!-- /.payment-method -->
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
                            <tbody class="tbody">
                                @if (!$products->isEmpty())
                                    @foreach ($products as $product)
                                        <tr class="tr">
                                            <td class="td"><span class="title">{{ $product->title }} (2)</span></td>
                                            <!-- /.td -->
                                            <td class="td"><span class="price">${{ $product->sale_price }}</span></td>
                                            <!-- /.td -->
                                            <td class="td"><span class="price">${{ $product->sale_price * 2 }}</span></td>
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
                            <div class="place-order row">
                                <div class="col-12">
                                    {{-- <button class="btn btn-green">Pagar</button> --}}
                                    <a href="{{ url('gracias') }}" class="btn btn-green">Pagar</a>
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
