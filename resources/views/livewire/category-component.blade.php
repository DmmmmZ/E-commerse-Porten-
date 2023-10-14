<div class="main">
    <div class="wrapper">
        <section class="container">
            <h2>Наш каталог</h2>
            <div class="title__info">
                <div class="totall-product">
                    <p> We found <strong class="text-brand">{{$products->total()}}</strong> items for you form <strong class="text-brand">{{$category_name}}</strong> Category!</p>
                </div>
                <div class="cont">
                    <div class="dropdown">
                        <button class="dropdown_toggle" data-path="one">
                            Show: <span>{{$pageSize}}</span>
                        </button>
                        <ul data-target="one" class="dropdown_menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown_item {{$pageSize==12 ? 'active': ''}}" href="#" wire:click.prevent="changePageSize(12)">12</a></li>
                            <li><a class="dropdown_item {{$pageSize==15 ? 'active': ''}}" href="#" wire:click.prevent="changePageSize(15)">15</a></li>
                            <li><a class="dropdown_item {{$pageSize==25 ? 'active': ''}}" href="#" wire:click.prevent="changePageSize(25)">25</a></li>
                            <li><a class="dropdown_item {{$pageSize==32 ? 'active': ''}}" href="#" wire:click.prevent="changePageSize(32)">32</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown_toggle" data-path="two">
                            Sort by: <span>Default Sorting</span>
                        </button>
                        <ul data-target="two" class="dropdown_menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown_item {{$orderBy=='Default Sorting' ? 'active': ''}}" href="#" wire:click.prevent="changeOrderBy('Default Sorting')">Default Sorting</a></li>
                            <li><a class="dropdown_item {{$orderBy=='Price: Low to High' ? 'active': ''}}" href="#" wire:click.prevent="changeOrderBy('Price: Low to High')">Price: Low to High</a></li>
                            <li><a class="dropdown_item {{$orderBy=='Price: High to Low' ? 'active': ''}}" href="#" wire:click.prevent="changeOrderBy('Price: High to Low')">Price: High to Low</a></li>
                            <li><a class="dropdown_item {{$orderBy=='Sort By Newness' ? 'active': ''}}" href="#" wire:click.prevent="changeOrderBy('Sort By Newness')">Sort By Newness</a></li>
                        </ul>
                    </div>
                </div>
            </div>
          {{-- <div class="sort-by-product-area">
              <div class="sort-by-cover mr-10">
                  <div class="sort-by-product-wrap">
                      <div class="sort-by">
                          <span><i class="fi-rs-apps"></i>Show:</span>
                      </div>
                      <div class="sort-by-dropdown-wrap">
                          <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                      </div>
                  </div>
                  <div class="sort-by-dropdown">
                      <ul>
                          <li><a class="active" href="#">50</a></li>
                          <li><a href="#">100</a></li>
                          <li><a href="#">150</a></li>
                          <li><a href="#">200</a></li>
                          <li><a href="#">All</a></li>
                      </ul>
                  </div>
              </div>
              <div class="sort-by-cover">
                  <div class="sort-by-product-wrap">
                      <div class="sort-by">
                          <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                      </div>
                      <div class="sort-by-dropdown-wrap">
                          <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                      </div>
                  </div>
                  <div class="sort-by-dropdown">
                      <ul>
                          <li><a class="active" href="#">Featured</a></li>
                          <li><a href="#">Price: Low to High</a></li>
                          <li><a href="#">Price: High to Low</a></li>
                          <li><a href="#">Release Date</a></li>
                          <li><a href="#">Avg. Rating</a></li>
                      </ul>
                  </div>
              </div>
          </div>  --}}
            <div class="container_block">
                @foreach ($products as $product)
                    <div class="container_cart">
                        <a href="{{ route('product.details', ['slug' => $product->slug]) }}">
                            <img src="{{ asset('assets/img/product/1-') }}{{ $product->id }}.jpg" alt="{{ $product->name }}">
                        </a>
                        <h3>{{ $product->name }}</h3>
                        <div class="cart_info">
                            <p>${{ $product->regular_price }}</p>
                            <a aria-label="Add To Cart" class="AddToCard" href="#"
                                wire:click.prevent="store({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})"><i
                                    class="fa-solid fa-cart-plus"></i></a>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="container_cart">
                <a href="cart.html">
                  <img src="{{asset('assets/img/product/2.jpg')}}" alt="">
                </a>
                <h3>Louis XVI ATHOS</h3>
                <div class="cart_info">
                  <p>429 $</p>
                  <a aria-label="Add To Cart" class="AddToCard" href="#"><i class="fa-solid fa-cart-plus"></i></a>
                </div>
              </div> --}}
            </div>
            <div class="pagination">
                {{ $products->links() }}
            </div>
        </section>
        <section class="right_box">
            <div class="right__info">
                <h5>Category</h5>
                <ul class="right__list">
                    @foreach ($categories as $category)
                    <li><a href="{{route('product.category',['slug'=>$category->slug])}}">{{$category->name}}</a></li>    
                    @endforeach
                </ul>
            </div>
            <div class="right__range__price">
                <h5>Fillter by Price</h5>
                <div class="price">
                    <div class="input-field">
                        <span>Min</span>
                        <i class="fa-solid fa-dollar-sign" style="color: white;"></i>
                        <input type="number" class="min-input" value="{{ $min_value }}"
                            oninput="onChangeInput(event)">
                    </div>
                    <div class="input-field">
                        <span> Max</span>
                        <i class="fa-solid fa-dollar-sign" style="color: white;"></i>
                        <input type="number" class="max-input" value="{{ $max_value }}"
                            oninput="onChangeInput(event)">
                    </div>
                </div>
            </div>
            {{-- <div class="price-filter">
                <div class="price-filter-inner">
                    <div id="slider-range"></div>
                    <div class="price_slider_amount">
                        <div class="label-input">
                            <span>Range:</span><input type="text" id="amount" name="price" placeholder="Add Your Price">
                        </div>
                    </div>
                </div>
            </div> --}}
        </section>
    </div>
</div>
@push('scripts')
    <script>
        const price = document.querySelectorAll('.input-field input');
        const onChangeInput = (e) => {
            let min = parseInt(@this.set('min_value', price[0].value));
            let max = parseInt(@this.set('max_value', price[1].value));
        };
    </script>
@endpush