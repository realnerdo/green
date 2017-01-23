@extends('layout.base')

@section('title', 'Green - '.$page->title)

@section('front')
    <section id="page">
        <div class="wrapper">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-title">{{ $page->title }}</h1>
                    <!-- /.title -->
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        {{ $page->content }}
                    </div>
                    <!-- /.content -->
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.wrapper -->
    </section>
    <!-- /#page -->
@endsection
