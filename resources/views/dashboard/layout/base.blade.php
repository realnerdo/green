@extends('layout.base')

@section('dashboard')
    <section id="dashboard">
        <div class="wrapper">
            <div class="row">
                <div class="col-2">
                    @include('dashboard.layout.sidebar')
                </div>
                <!-- /.col-2 -->
                <div class="col-10">
                    <section id="main">
                        <section class="dashboard-content">
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="section-title">@yield('dashboard-title')</h1>
                                    <!-- /.section-title -->
                                    @yield('dashboard-buttons')
                                </div>
                                <!-- /.col-12 -->
                            </div>
                            <!-- /.row -->
                            @yield('dashboard-content')
                        </section>
                        <!-- /.dashboard-content -->
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