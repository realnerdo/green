<a href="{{ url('producto/'.$product->variations->first()->slug) }}" class="product">
    <img src="{{ $product->medias->first()->url }}" alt="title" class="img">
    <div class="content">
        <h3 class="title">{{ $product->variations->first()->title }}</h3>
        <!-- /.title -->
        <div class="price">
            <span class="amount">${{ $product->variations->first()->meta->sale_price }}</span>
        </div>
        <!-- /.price -->
    </div>
    <!-- /.content -->
</a>
<!-- /.product -->
