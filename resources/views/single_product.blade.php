@extends('layout.base')

@section('title', 'Green - Single')

@section('front')
    <section id="single-product">
        <div class="wrapper">
            <header class="header">
                <div class="row">
                    <div class="col-9">
                        <div class="breadcrumbs">
                            <a href="{{ url('/') }}" class="link">Volver al listado</a> |
                            <a href="{{ url('categoria/'.$single->categories->first()->slug) }}" class="link">{{ $single->categories->first()->title }}</a> -
                            <span class="current">{{ $single->title }}</span>
                        </div>
                        <!-- /.breadcrumbs -->
                    </div>
                    <!-- /.col-9 -->
                    <div class="col-3">
                        <div class="report pull-right">
                            <a href="#" class="link">Denunciar este producto</a>
                        </div>
                        <!-- /.report -->
                    </div>
                    <!-- /.col-3 -->
                </div>
                <!-- /.row -->
            </header>
            <!-- /.header -->
            <article class="single">
                <div class="row">
                    <div class="col-6 no-padding">
                        <div class="col-10">
                            <div class="gallery">
                                <img src="{{ $single->medias->first()->url }}" alt="{{ $single->title }}" class="featured">
                            </div>
                            <!-- /.gallery -->
                        </div>
                        <!-- /.col-5 no-padding -->
                        <div class="col-2">
                            <div class="thumbnails">
                                <ul class="list">
                                    <li class="item">
                                        <img src="{{ asset('img/thumbnail_1.jpg') }}" alt="" class="img">
                                    </li>
                                    <!-- /.item -->
                                    <li class="item">
                                        <img src="{{ asset('img/thumbnail_2.jpg') }}" alt="" class="img">
                                    </li>
                                    <!-- /.item -->
                                    <li class="item">
                                        <img src="{{ asset('img/thumbnail_3.jpg') }}" alt="" class="img">
                                    </li>
                                    <!-- /.item -->
                                </ul>
                                <!-- /.list -->
                            </div>
                            <!-- /.thumbnails -->
                        </div>
                        <!-- /.col-1 -->
                    </div>
                    <!-- /.col-6 -->

                    <div class="col-6">
                        <div class="information">
                            <h1 class="title">{{ $single->title }}</h1>
                            <!-- /.title -->
                            <h2 class="subtitle">
                                Quedan 7 días · Ubicado en Monterrey, NL · 16 vendidos · 6 opiniones
                            </h2>
                            <!-- /.subtitle -->
                            <div class="description">
                                {{ $single->description }}
                            </div>
                            <!-- /.description -->
                            {{-- <div class="variations">
                                <div class="row">
                                    <div class="col-12 no-padding">
                                        <div class="variation">
                                            <h6 class="title">Material</h6>
                                            <!-- /.title -->
                                            <select name="variation" id="" class="select">
                                                <option value="">Piedra</option>
                                                <option value="">Madera</option>
                                            </select>
                                        </div>
                                        <!-- /.variation -->
                                        <div class="variation">
                                            <h6 class="title">Color</h6>
                                            <!-- /.title -->
                                            <select name="variation" id="" class="select">
                                                <option value="">Verde</option>
                                                <option value="">Café</option>
                                                <option value="">Amarillo</option>
                                            </select>
                                        </div>
                                        <!-- /.variation -->
                                    </div>
                                    <!-- /.col-12 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.variations --> --}}
                            <div class="add-to-cart">
                                <div class="row">
                                    <div class="col-12 no-padding">
                                        <div class="quantity">
                                            <h3 class="title">Cantidad</h3>
                                            <!-- /.title -->
                                            <button class="qty_less control">—</button>
                                            <input type="number" class="qty" name="qty" min="0" max="100" value="1">
                                            <button class="qty_more control">+</button>
                                        </div>
                                        <!-- /.quantity -->
                                    </div>
                                    <!-- /.col-6 -->
                                    <div class="col-12">
                                        {{ Form::open(['url' => 'carrito/agregar']) }}
                                            <button class="add-to-cart-btn btn btn-green" type="submit">Añadir al carrito</button>
                                            {{ Form::hidden('quantity', 1, ['id' => 'qty-input']) }}
                                            {{ Form::hidden('product_id', $single->id, ['id' => 'product-input']) }}
                                        {{ Form::close() }}
                                        {{-- <button class="add-to-collection-btn btn btn-orange" type="button">Añadir a colección</button> --}}
                                        <a href="{{ url('coleccion') }}" class="add-to-collection-btn btn btn-orange">Añadir a colección</a>
                                    </div>
                                    <!-- /.col-6 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.add-to-cart -->
                        </div>
                        <!-- /.information -->
                    </div>
                    <!-- /.col-6 -->
                </div>
                <!-- /.row -->
            </article>
            <!-- /.single -->

            <div class="row">
                <div class="col-6">
                    <section class="reviews">
                        <h3 class="title">Opiniones de clientes</h3>
                        <!-- /.title -->
                        @include('layout.stars')
                        <article class="review">
                            <header class="header">
                                <div class="row">
                                    <div class="rating">
                                        @include('layout.stars_list')
                                        <span>Satisfecho</span>
                                    </div>
                                    <!-- /.rating -->
                                </div>
                                <!-- /.row -->
                                <div class="row">
                                    <span class="author">Por <a href="#" class="link">Asael</a> el 15 de Agosto del 2016</span> ·
                                    <span class="variation">Material: Piedra | Color: Gris</span>
                                </div>
                                <!-- /.row -->
                            </header>
                            <!-- /.header -->
                            <div class="content">
                                <p>El articulo me llegó sin problemas y el diseño está muy bien. Se ve muy resistente y me gustó el material. Lo recomiendo mucho. Gracias.</p>
                            </div>
                            <!-- /.content -->
                        </article>
                        <!-- /.review -->
                        <article class="review">
                            <header class="header">
                                <div class="row">
                                    <div class="rating">
                                        @include('layout.stars_list')
                                        <span>Satisfecho</span>
                                    </div>
                                    <!-- /.rating -->
                                </div>
                                <!-- /.row -->
                                <div class="row">
                                    <span class="author">Por <a href="#" class="link">Asael</a> el 15 de Agosto del 2016</span> ·
                                    <span class="variation">Material: Piedra | Color: Gris</span>
                                </div>
                                <!-- /.row -->
                            </header>
                            <!-- /.header -->
                            <div class="content">
                                <p>El articulo me llegó sin problemas y el diseño está muy bien. Se ve muy resistente y me gustó el material. Lo recomiendo mucho. Gracias.</p>
                            </div>
                            <!-- /.content -->
                        </article>
                        <!-- /.review -->
                        <article class="review">
                            <header class="header">
                                <div class="row">
                                    <div class="rating">
                                        @include('layout.stars_list')
                                        <span>Satisfecho</span>
                                    </div>
                                    <!-- /.rating -->
                                </div>
                                <!-- /.row -->
                                <div class="row">
                                    <span class="author">Por <a href="#" class="link">Asael</a> el 15 de Agosto del 2016</span> ·
                                    <span class="variation">Material: Piedra | Color: Gris</span>
                                </div>
                                <!-- /.row -->
                            </header>
                            <!-- /.header -->
                            <div class="content">
                                <p>El articulo me llegó sin problemas y el diseño está muy bien. Se ve muy resistente y me gustó el material. Lo recomiendo mucho. Gracias.</p>
                            </div>
                            <!-- /.content -->
                        </article>
                        <!-- /.review -->
                    </section>
                    <!-- /.reviews -->
                </div>
                <!-- /.col-6 -->
                <div class="col-6">
                    <section class="questions">
                        <h3 class="title">Preguntas al vendedor</h3>
                        <!-- /.title -->
                        <h4 class="subtitle">Tiempo aproximado de respuesta 15 minutos</h4>
                        <!-- /.subtitle -->
                        {{ Form::open(['url' => '/', 'class' => 'question_form']) }}
                            <div class="input-wrapper">
                                {{ Form::input('text', 'question', null, ['class' => 'input', 'placeholder' => 'Escribe tu pregunta...']) }}
                                {{ Form::submit('Preguntar', ['class' => 'btn btn-green']) }}
                            </div>
                            <!-- /.input-wrapper -->
                        {{ Form::close() }}
                        <div class="conversation">
                            <div class="thread">
                                <div class="row">
                                    <div class="question">
                                        <header class="header">
                                            <a href="#" class="link">Asael</a> preguntó el 15/Ago/2016 · 16:30
                                        </header>
                                        <!-- /.header -->
                                        <div class="content">
                                            ¿De qué tipo de madera está hecho el toallero? Saludos.
                                        </div>
                                        <!-- /.content -->
                                    </div>
                                    <!-- /.question -->
                                    <div class="answer">
                                        <header class="header">
                                            <a href="#" class="link">Vendedor</a> respondió el 15/Ago/2016 · 16:45
                                        </header>
                                        <!-- /.header -->
                                        <div class="content">
                                            Está hecho de madera de pino. Saludos.
                                        </div>
                                        <!-- /.content -->
                                    </div>
                                    <!-- /.answer -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.thread -->
                            <div class="thread">
                                <div class="row">
                                    <div class="question">
                                        <header class="header">
                                            <a href="#" class="link">Asael</a> preguntó el 15/Ago/2016 · 16:30
                                        </header>
                                        <!-- /.header -->
                                        <div class="content">
                                            ¿De qué tipo de madera está hecho el toallero? Saludos.
                                        </div>
                                        <!-- /.content -->
                                    </div>
                                    <!-- /.question -->
                                    <div class="answer">
                                        <header class="header">
                                            <a href="#" class="link">Vendedor</a> respondió el 15/Ago/2016 · 16:45
                                        </header>
                                        <!-- /.header -->
                                        <div class="content">
                                            Está hecho de madera de pino. Saludos.
                                        </div>
                                        <!-- /.content -->
                                    </div>
                                    <!-- /.answer -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.thread -->
                            <div class="thread">
                                <div class="row">
                                    <div class="question">
                                        <header class="header">
                                            <a href="#" class="link">Asael</a> preguntó el 15/Ago/2016 · 16:30
                                        </header>
                                        <!-- /.header -->
                                        <div class="content">
                                            ¿De qué tipo de madera está hecho el toallero? Saludos.
                                        </div>
                                        <!-- /.content -->
                                    </div>
                                    <!-- /.question -->
                                    <div class="answer">
                                        <header class="header">
                                            <a href="#" class="link">Vendedor</a> respondió el 15/Ago/2016 · 16:45
                                        </header>
                                        <!-- /.header -->
                                        <div class="content">
                                            Está hecho de madera de pino. Saludos.
                                        </div>
                                        <!-- /.content -->
                                    </div>
                                    <!-- /.answer -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.thread -->
                        </div>
                        <!-- /.conversation -->
                    </section>
                    <!-- /.questions -->
                </div>
                <!-- /.col-6 -->
            </div>
            <!-- /.row -->

            <section class="related_products">
                <div class="row">
                    <div class="col-12">
                        <h3 class="title">Productos relacionados</h3>
                        <!-- /.title -->
                    </div>
                    <!-- /.col-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    @if (!$related->isEmpty())
                        @foreach ($related as $product)
                            <div class="col-3">
                                @include('layout.product')
                            </div>
                            <!-- /.col-3 -->
                        @endforeach
                    @endif
                </div>
                <!-- /.row -->
            </section>
            <!-- /.related_products -->

        </div>
        <!-- /.wrapper -->
    </section>
    <!-- /#single -->
@endsection
