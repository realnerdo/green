<section id="results">
    <div class="wrapper">
            <header class="header">
                <div class="row">
                    <div class="col-10">
                        <h2 class="title">Se encontraron <strong>{{ $products->count() }}</strong> productos para "<strong>{{ $s }}</strong>"</h2>
                        <!-- /.title -->
                    </div>
                    <!-- /.col-10 -->
                    <div class="col-2">
                        <div class="display pull-right">
                            <ul class="list">
                                <li class="item">
                                    <button class="mode">
                                        <img src="{{ asset('img/display-list.svg') }}" alt="List" class="img">
                                    </button>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <button class="mode">
                                        <img src="{{ asset('img/display-grid.svg') }}" alt="Grid" class="img">
                                    </button>
                                </li>
                                <!-- /.item -->
                            </ul>
                            <!-- /.list -->
                        </div>
                        <!-- /.display -->
                    </div>
                    <!-- /.col-2 -->
                </div>
                <!-- /.row -->
            </header>
            <!-- /.header -->
        <div class="products">
            <div class="row">
                @if (!$products->isEmpty())
                    @foreach ($products as $product)
                        <div class="col-4">
                            @include('layout.product')
                        </div>
                        <!-- /.col-4 -->
                    @endforeach
                @endif
            </div>
            <!-- /.row -->
        </div>
        <!-- /.products -->
        <div class="pagination">
            <div class="row">
                <div class="col-12">
                    {{-- Pagination HTML --}}
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.pagination -->
    </div>
    <!-- /.wrapper -->
</section>
<!-- /#results -->
