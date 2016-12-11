@extends('layout.base')

@section('title', 'Green - Single')

@section('content')
    <section id="single">
        <div class="wrapper">
            <header class="header">
                <div class="row">
                    <div class="col-9">
                        <div class="breadcrumbs">
                            <a href="{{ url('/') }}" class="link">Volver al listado</a> |
                            <a href="#" class="link">Hogar</a> -
                            <a href="#" class="link">Baño</a> -
                            <span class="current">Ganchos de piedra para toallas</span>
                        </div>
                        <!-- /.breadcrumbs -->
                    </div>
                    <!-- /.col-9 -->
                    <div class="col-3">
                        <div class="report">
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
                    <div class="col-6">
                        <div class="col-5 no-padding">
                            <div class="gallery">

                            </div>
                            <!-- /.gallery -->
                        </div>
                        <!-- /.col-5 no-padding -->
                        <div class="col-1">
                            <div class="thumbnails">

                            </div>
                            <!-- /.thumbnails -->
                        </div>
                        <!-- /.col-1 -->
                    </div>
                    <!-- /.col-6 -->

                    <div class="col-6">
                        <div class="information">
                            <h1 class="title">Ganchos de piedra para toallas</h1>
                            <!-- /.title -->
                            <h2 class="subheader">
                                Quedan 7 días · Ubicado en Monterrey, NL · 16 vendidos · 6 opiniones
                            </h2>
                            <!-- /.subheader -->
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore dolores iure iusto deleniti dolor nemo architecto perferendis molestiae quae praesentium. Consectetur repellat quaerat accusamus impedit nesciunt odio, aut corporis, quam.</p>
                            </div>
                            <!-- /.description -->
                            <div class="variations">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="variation">
                                            <h6 class="title">Material</h6>
                                            <!-- /.title -->
                                            <select name="variation" id="" class="select">
                                                <option value="">Piedra</option>
                                                <option value="">Madera</option>
                                            </select>
                                        </div>
                                        <!-- /.variation -->
                                    </div>
                                    <!-- /.col-6 -->
                                    <div class="col-6">
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
                                    <!-- /.col-6 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.variations -->
                            <div class="add-to-cart">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="quantity">
                                            <button class="qty_less">—</button>
                                            <input type="number" class="qty" name="qty" min="0" max="100">
                                            <button class="qty_more">+</button>
                                        </div>
                                        <!-- /.quantity -->
                                    </div>
                                    <!-- /.col-6 -->
                                    <div class="col-6">
                                        <button class="add-to-cart-btn" type="submit">Añadir al carrito</button>
                                        <button class="add-to-collection-btn" type="submit">Añadir a colección</button>
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
                                        @include('layout.starts_list')
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
                                <div class="row">
                                    <div class="content">
                                        <p>El articulo me llegó sin problemas y el diseño está muy bien. Se ve muy resistente y me gustó el material. Lo recomiendo mucho. Gracias.</p>
                                    </div>
                                    <!-- /.content -->
                                </div>
                                <!-- /.row -->
                            </header>
                            <!-- /.header -->
                        </article>
                        <!-- /.review -->
                        <article class="review">
                            <header class="header">
                                <div class="row">
                                    <div class="rating">
                                        @include('layout.starts_list')
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
                                <div class="row">
                                    <div class="content">
                                        <p>El articulo me llegó sin problemas y el diseño está muy bien. Se ve muy resistente y me gustó el material. Lo recomiendo mucho. Gracias.</p>
                                    </div>
                                    <!-- /.content -->
                                </div>
                                <!-- /.row -->
                            </header>
                            <!-- /.header -->
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
                        {{ Form::open(['url' => '/'], ['class' => 'question_form']) }}
                            {{ Form::input('text', 'question') }}
                            {{ Form::submit('Preguntar') }}
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
                <h3 class="title">Productos relacionados</h3>
                <!-- /.title -->
                <div class="row">
                    <div class="col-3">
                        @include('layout.product')
                    </div>
                    <!-- /.col-3 -->
                    <div class="col-3">
                        @include('layout.product')
                    </div>
                    <!-- /.col-3 -->
                    <div class="col-3">
                        @include('layout.product')
                    </div>
                    <!-- /.col-3 -->
                    <div class="col-3">
                        @include('layout.product')
                    </div>
                    <!-- /.col-3 -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.related_products -->

        </div>
        <!-- /.wrapper -->
    </section>
    <!-- /#single -->
@endsection
