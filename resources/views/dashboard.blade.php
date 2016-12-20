@extends('layout.base')

@section('title', 'Green - Dashboard')

@section('content')
    <section id="dashboard">
        <div class="wrapper">
            <div class="row">
                <div class="col-2">
                    @include('dashboard.sidebar')
                </div>
                <!-- /.col-2 -->
                <div class="col-10">
                    <section id="main">
                        @include('dashboard.'.$page)
                    </section>
                    <!-- /#dashboard-content -->
                </div>
                <!-- /.col-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.wrapper -->
    </section>
    <!-- /#dashboard -->
@endsection
