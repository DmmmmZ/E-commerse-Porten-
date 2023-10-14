<div>
    <li class="basket">
        <a href="{{route('shop.cart')}}" class="header__link"><i class="fa-regular fa-cart-shopping"
                style="color: #969696;"></i></a>
        @if (Cart::instance('cart')->count() > 0)
            <i id="num_shop">{{Cart::instance('cart')->count()}}</i>
        @endif
    </li>
</div>
