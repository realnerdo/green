@extends('layout.base')

@section('title', 'Green - Store')

@section('content')
    <section id="store">
        <div class="wrapper">
            <div class="row">
                <div class="col-3">
                    @include('store.sidebar')
                </div>
                <!-- /.col-3 -->
                <div class="col-9 no-padding">
                    @include('store.results')
                </div>
                <!-- /.col-9 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.wrapper -->
    </section>
    <!-- /#store -->
@endsection
