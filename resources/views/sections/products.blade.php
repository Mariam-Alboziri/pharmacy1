<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="title-section text-center col-12">
                <a href="">
                    <h2>Pharmacy <strong class="text-primary">Products</strong></h2>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 block-3 products-wrap">
                <div class="nonloop-block-3 owl-carousel">
                    @foreach ($products as $product)
                        <div class="text-center item mb-4 item-v2">
                            <span class="onsale">Sale</span>
                            <a href="shop-single.html"> <img src="images/product_03.png" alt="Image"></a>
                            <h3 class="text-dark"><a href="shop-single.html">{{ $product->name }}</a></h3>
                            <p class="price">{{ $product->price }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
