@extends('layout.base')

@section('title', 'Green - Collection')

@section('content')
    <section id="single-collection">

        <div class="cover">
            <div class="wrapper">
                <div class="row col-12">
                    <div class="content">
                        <img src="{{ asset('img/cover.jpg') }}" alt="2016 Fall Collection" class="img">
                        <h1 class="headline"><span class="text">2016 Fall Collection</span></h1>
                        <!-- /.headline -->
                    </div>
                    <!-- /.content -->
                </div>
                <!-- /.row col-12 -->
            </div>
            <!-- /.wrapper -->
        </div>
        <!-- /.cover -->

        <section class="products">
            <div class="wrapper">
                <header class="header">
                    <div class="row">
                        <div class="col-7">
                            <h3 class="title">Colección de Otoño 2016</h3>
                            <!-- /.title -->
                        </div>
                        <!-- /.col-7 -->
                        <div class="col-5">
                            <h4 class="subtitle pull-right">Compartir esta colección en <a href="#" class="link"><img src="{{ asset('img/facebook.svg') }}" alt="Facebook" class="img"></a> <a href="#" class="link"><img src="{{ asset('img/twitter.svg') }}" alt="Twitter" class="img"></a></h4>
                            <!-- /.subtitle -->
                        </div>
                        <!-- /.col-5 -->
                    </div>
                    <!-- /.row -->
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
            </div>
            <!-- /.wrapper -->
        </section>
        <!-- /.products -->

    </section>
    <!-- /#collections -->
@endsection
