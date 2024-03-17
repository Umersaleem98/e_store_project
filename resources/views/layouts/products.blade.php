<section id="mobile-products" class="product-store position-relative padding-large no-padding-top">
  <div class="container">
    <div class="row">
      <div class="display-header d-flex justify-content-between pb-3">
        <h2 class="display-7 text-dark text-uppercase">Mobile Products</h2>
        <div class="btn-right">
          <a href="shop.html" class="btn btn-medium btn-normal text-uppercase">Go to Shop</a>
        </div>
      </div>
      <div class="swiper product-swiper">
        <div class="swiper-wrapper">
          @foreach ($products as $product)
          @if (in_array($product->category, ['laptop', 'mobile', 'handphone', 'watch']))
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <!-- Assuming $product->image_url is the field holding the image URL -->
                    <img src="{{ 'products/' . $product->image }}" style="height: 350px; width: auto;" alt="{{ $product->name }}" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <a href="#" class="btn btn-medium btn-black">Add to Cart<svg class="cart-outline"><use xlink:href="#cart-outline"></use></svg></a>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">{{ $product->name }}</a>
                    </h3>
                    <span class="item-price text-primary">${{ $product->price }}</span>
                  </div>
                </div>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-pagination position-absolute text-center"></div>

</section>
