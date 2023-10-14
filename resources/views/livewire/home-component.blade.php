<div class="main">
    <div id="progress">
        <span id="progress-value">&#x1F815</span>
    </div>
    {{ asset('assets/css/all.min.css') }}
    {{-- <section class="slider">
      <div class="slides">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <div class="slide first">
          <div class="slide_left">
            <h2>Testing text 1</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, perferendis?</p>
            <button class="btn">Show me</button>
          </div>
          <div class="slide_right">
            <img src="{{asset('assets/img/slider-1.png')}}" alt="">
          </div>
        </div>
        <div class="slide">
          <div class="slide_left">
            <h2>Testing text 2</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, perferendis?</p>
            <button class="btn">Show me</button>
          </div>
          <div class="slide_right">
            <img src="{{asset('assets/img/slider-2.png')}}" alt="">
          </div>
        </div>
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
        </div>
        <div class="navigation-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
        </div>
      </div>
    </section> --}}
    <section class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <div class="slide first">
                <div class="prev">
                  <h2>PORTEN</h2>
                  <p>Welcome, time is waiting for you</p>
                </div>
            </div>
            @foreach ($slides as $slide)
                <div class="slide">
                    <div class="slide_left">
                        <h2>{{ $slide->title }}</h2>
                        <h3>{{ $slide->sub_title }}</h3>
                        <p>{{ $slide->offer }}</p>
                        <a href="{{ $slide->link }}" class="btn">Show me</a>
                    </div>
                    <div class="slide_right">
                        <img src="{{ asset('assets/img/slider/') }}/{{ $slide->image }}" alt="{{ $slide->title }}">
                    </div>
                </div>
            @endforeach
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
        </div>
    </section>

    <section class="box">
        <div class="block_box">
            <h2>Що тебе приваблує
                <span id="spa">
                    <span id="sp">спорт</span>
                    <span id="sp">вишуканість</span>
                    <span id="sp">механіка</span>
                    <span id="sp">спорт</span>
                </span>
            </h2>
            <hr>
            <div class="block_shop">
                <div class="block_cart">
                    <img src="{{ asset('assets/img/Screenshot_3.png') }}" alt="">
                    <div class="content">
                        <h1>Image Intelegy</h1>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <a href="./shop.html">Show me</a>
                    </div>
                </div>
                <div class="block_cart">
                    <img src="{{ asset('assets/img/Screenshot_2.png') }}" alt="">
                    <div class="content">
                        <h1>Image Mehanica</h1>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <a href="./shop.html">Show me</a>
                    </div>
                </div>
                <div class="block_cart">
                    <img src="{{ asset('assets/img/Screenshot_1.png') }}" alt="">
                    <div class="content">
                        <h1>Image Sports</h1>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <a href="./shop.html">Show me</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="block_image">
            <h2>Нова колекція</h2>
            <hr>
            <button class="btn">Каталог</button>
        </div>
    </section>
    <section class="subtitle_box">
        <div class="block_image_too">
            <img src="{{ asset('assets/img/Rectangle9.png') }}" alt="">
        </div>
        <div class="block_subtitle">
            <h2>Колекція 2023</h2>
            <hr>
            <p id="p_none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat saepe recusandae,
                voluptatum
                iusto voluptatem ad et quisquam pariatur quia impedit harum dicta perferendis ipsum, aperiam corrupti,
                voluptatibus quam eaque in.
                Perferendis tenetur quam repellat eaque maxime, magnam, atque pariatur dicta maiores facere alias
                nostrum
                accusamus id obcaecati, eos laudantium? Delectus ipsam, aut enim excepturi incidunt accusantium minus
                voluptatibus dignissimos pariatur.
            </p>
            <button class="btn">Продивитись колекцію</button>
        </div>
    </section>
    <section class="container">
        <h2>Рекомендації</h2>
        <hr>
        <div class="container_block">
            @php
            $witems = Cart::instance('wishlist')->content()->pluck('id');
            @endphp
            @foreach ($products as $product)
            <div class="container_cart">
                <a href="{{ route('product.details', ['slug' => $product->slug]) }}">
                    <img src="{{ asset('assets/img/products') }}/{{ $product->image }}" alt="{{ $product->name }}">
                </a>
                <h3>{{ $product->name }}</h3>
                <div class="cart_info">
                    <p>${{ $product->regular_price }}</p>
                    <div>
                        @if ($witems->contains($product->id))
                            <a href="#" class="AddToCard act" wire:click.prevent="removeFromWishList({{$product->id}})"><i class="fa-solid fa-heart"></i></a>
                        @else
                            <a href="#" class="AddToCard"
                                wire:click.prevent="AddToWishList({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})"><i
                                    class="fa-solid fa-heart"></i></a>
                        @endif
                        <a aria-label="Add To Cart" class="AddToCard" href="#"
                            wire:click.prevent="store({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})"><i
                                class="fa-solid fa-cart-plus"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="container_cart">
                <a href="cart.html">
                    <img src="{{ asset('assets/img/product/1-2.jpg') }}" alt="">
                </a>
                <h3>Louis XVI ATHOS</h3>
                <div class="cart_info">
                    <p>429 $</p>
                    <a aria-label="Add To Cart" class="AddToCard" href="#"><i
                            class="fa-solid fa-cart-plus"></i></a>
                </div>
            </div>
            <div class="container_cart">
                <a href="cart.html">
                    <img src="{{ asset('assets/img/product/1-3.jpg') }}" alt="">
                </a>
                <h3>Louis XVI ATHOS</h3>
                <div class="cart_info">
                    <p>390 $</p>
                    <a aria-label="Add To Cart" class="AddToCard" href="#"><i
                            class="fa-solid fa-cart-plus"></i></a>
                </div>
            </div>
            <div class="container_cart">
                <a href="cart.html">
                    <img src="{{ asset('assets/img/product/1-4.jpg') }}" alt="">
                </a>
                <h3>Louis XVI ATHOS</h3>
                <div class="cart_info">
                    <p>245 $</p>
                    <a aria-label="Add To Cart" class="AddToCard" href="#"><i
                            class="fa-solid fa-cart-plus"></i></a>
                </div>
            </div>
            <div class="container_cart">
                <a href="cart.html">
                    <img src="{{ asset('assets/img/product/1-5.jpg') }}" alt="">
                </a>
                <h3>Louis XVI ATHOS</h3>
                <div class="cart_info">
                    <p>758 $</p>
                    <a aria-label="Add To Cart" class="AddToCard" href="#"><i
                            class="fa-solid fa-cart-plus"></i></a>
                </div>
            </div>
            <div class="container_cart">
                <a href="cart.html">
                    <img src="{{ asset('assets/img/product/1-6.jpg') }}" alt="">
                </a>
                <h3>Louis XVI ATHOS</h3>
                <div class="cart_info">
                    <p>708 $</p>
                    <a aria-label="Add To Cart" class="AddToCard" href="#"><i
                            class="fa-solid fa-cart-plus"></i></a>
                </div>
            </div>
            <div class="container_cart">
                <a href="cart.html">
                    <img src="{{ asset('assets/img/product/1-7.jpg') }}" alt="">
                </a>
                <h3>Louis XVI ATHOS</h3>
                <div class="cart_info">
                    <p>319 $</p>
                    <a aria-label="Add To Cart" class="AddToCard" href="#"><i
                            class="fa-solid fa-cart-plus"></i></a>
                </div>
            </div>
            <div class="container_cart">
                <a href="cart.html">
                    <img src="{{ asset('assets/img/product/1-8.jpg') }}" alt="">
                </a>
                <h3>Louis XVI ATHOS</h3>
                <div class="cart_info">
                    <p>424 $</p>
                    <a aria-label="Add To Cart" class="AddToCard" href="#"><i
                            class="fa-solid fa-cart-plus"></i></a>
                </div>
            </div> --}}
        </div>
    </section>
    <section class="marq">
        <div class="marquee">
            <ul class="marquee-content">
                <li class="marq__img"><img src="{{ asset('assets/img/logotype/logo.png') }}" alt=""></li>
                <li class="marq__img"><img src="{{ asset('assets/img/logotype/logo1.png') }}" alt=""></li>
                <li class="marq__img"><img src="{{ asset('assets/img/logotype/logo2.png') }}" alt=""></li>
                <li class="marq__img"><img src="{{ asset('assets/img/logotype/logo3.png') }}" alt=""></li>
                <li class="marq__img"><img src="{{ asset('assets/img/logotype/logo4.png') }}" alt=""></li>
                <li class="marq__img"><img src="{{ asset('assets/img/logotype/logo5.png') }}" alt=""></li>
                <li class="marq__img"><img src="{{ asset('assets/img/logotype/logo6.png') }}" alt=""></li>
                <li class="marq__img"><img src="{{ asset('assets/img/logotype/logo7.png') }}" alt=""></li>
                <li class="marq__img"><img src="{{ asset('assets/img/logotype/logo8.png') }}" alt=""></li>
            </ul>
    </section>
</div>
