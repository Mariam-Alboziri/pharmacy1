<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="title-section text-center col-12">
                <a href="{{ route('medicines.index') }}">
                    <h2>Pharmacy <strong class="text-primary">Products</strong></h2>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 block-3 products-wrap">
                <div class="nonloop-block-3 owl-carousel">
                    @foreach ($medicines as $medicine)
                        <div class="text-center item mb-4 item-v2">
                            <span class="onsale">Sale</span>
                            <a href="{{ route ('medicines.show', $medicine) }}"> <img src="/storage/{{ $medicine->featured_image }}" width="100%" alt="Image"></a>
                            <h3 class="text-dark"><a href="shop-single.html">{{ $medicine->name }}</a></h3>
                            <p class="price">{{ $medicine->price }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
