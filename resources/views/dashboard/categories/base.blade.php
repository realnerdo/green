<section class="dashboard-category-form">
    <div class="row">
        <div class="col-12">
            <h1 class="section-title">@yield('dashboard-title')</h1>
            <!-- /.section-title -->
        </div>
        <!-- /.col-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-12">
            @include('dashboard.errors')
            @yield('dashboard-content')
        </div>
        <!-- /.col-12 -->
    </div>
    <!-- /.row -->
</section>
<!-- /.dashboard-category-form -->
