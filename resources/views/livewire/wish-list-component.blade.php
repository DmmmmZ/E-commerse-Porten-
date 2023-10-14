<div class="main">
    <div class="wrapper">
        <section class="container">
            <h2>Wishlist</h2>
            <div class="container_block">
                @foreach (Cart::instance('wishlist')->content() as $item)
                <div class="container_cart">
                    <a href="{{ route('product.details', ['slug' => $item->model->slug]) }}">
                        <img src="{{ asset('assets/img/products') }}/{{ $item->model->image }}"
                            alt="{{ $item->model->name }}">
                    </a>
                    <h3>{{ $item->model->name }}</h3>
                    <div class="cart_info">
                        <p>${{ $item->model->regular_price }}</p>
                        <a href="#" class="AddToCard act" wire:click.prevent="removeFromWishList({{$item->model->id}})"><i class="fa-solid fa-heart"></i></a>
                    </div>
                </div>
                @endforeach 
            </div>
        </section>
    </div>
</div>
