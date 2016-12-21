<section id="featured-products">
    <div class="wrapper">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">Lo más vendido</h2>
                <!-- /.title -->
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            @if (!$products->isEmpty())
                @foreach ($products as $product)
                    <div class="col-3">
                        @include('layout.product')
                    </div>
                    <!-- /.col-3 -->
                @endforeach
            @endif
        </div>
        <!-- /.row -->
    </div>
    <!-- /.wrapper -->
</section>
