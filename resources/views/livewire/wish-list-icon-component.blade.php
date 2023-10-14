<div>
    <li class="basket">
        <a href="{{route('shop.wishlist')}}" class="header__link"><i class="fa-solid fa-heart" style="color: #969696;"></i></a>
        @if(Cart::instance('wishlist')->count() > 0)
        <i id="num_shop">{{Cart::instance('wishlist')->count()}}</i>
        @endif    
    </li>
</div>
