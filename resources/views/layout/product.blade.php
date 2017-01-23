<a href="{{ url('producto/'.$product->slug) }}" class="product">
    <img src="{{ $product->medias->first()->url }}" alt="title" class="img">
    <div class="content">
        <h3 class="title">{{ $product->title }}</h3>
        <!-- /.title -->
        <div class="price">
            <span class="amount">${{ $product->sale_price }}</span>
        </div>
        <!-- /.price -->
    </div>
    <!-- /.content -->
</a>
<!-- /.product -->
