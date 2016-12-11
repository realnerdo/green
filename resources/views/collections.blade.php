@extends('layout.base')

@section('title', 'Green - Collections')

@section('content')
    <section id="collections">

        <div class="cover">
            <div class="wrapper">
                <div class="row col-12">
                    <img src="{{ asset('img/collection_cover.jpg') }}" alt="2016 Fall Collection" class="img">
                    <h1 class="headline">2016 Fall Collection</h1>
                    <!-- /.headline -->
                </div>
                <!-- /.row col-12 -->
            </div>
            <!-- /.wrapper -->
        </div>
        <!-- /.cover -->

        <section class="products">
            <header class="header">
                <h3 class="title">Colección de Otoño 2016</h3>
                <!-- /.title -->
                <h4 class="subtitle">Compartir esta colección en <a href="#" class="link"><img src="{{ asset('img/facebook.svg') }}" alt="Facebook" class="img"></a> <a href="#" class="link"><img src="{{ asset('img/twitter.svg') }}" alt="Twitter" class="img"></a></h4>
                <!-- /.subtitle -->
            </header>
            <!-- /.header -->
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
        <!-- /.products -->

    </section>
    <!-- /#collections -->
@endsection
