<div class="main">
    <table class="pay__shop">
        <thead>
            <tr>
                <th id="a">Image</th>
                <th>Name</th>
                <th id="c">Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Remove</th>
            </tr>
        </thead>
        <tbody>
            {{-- @if (Cart::count() > 0)
            @endif --}}
            @foreach (Cart::instance('cart')->content() as $item)
                <tr>
                    <td id="a">
                        <img src="{{ asset('assets/img/products') }}/{{ $item->model->image }}"
                            alt="{{ $item->model->name }}">
                    </td>
                    <td>
                        <h5><a
                                href="{{ route('product.details', ['slug' => $item->model->slug]) }}">{{ $item->model->name }}</a>
                        </h5>
                    </td>
                    <td id="c">
                        <span>${{ $item->model->regular_price }}</span>
                    </td>
                    <td>
                        <div class="cc">
                            <div class="counter" data-counter>
                                <div id="con">
                                    <div class="counter__button" href="#">
                                        <i class="fa-solid fa-angle-up counter__button_plus"
                                            wire:click.prevent="increaseQuantity('{{ $item->rowId }}')"></i>
                                    </div>
                                    <div class="counter__button" href="#">
                                        <i class="fa-solid fa-angle-down counter__button_minus"
                                            wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')"></i>
                                    </div>
                                </div>
                                <span class="counter__input"><input type="text" disabled
                                        value="{{ $item->qty }}"></span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span>${{ $item->subtotal }}</span>
                    </td>
                    <td>
                        <a href="#" wire:click.prevent="destroy('{{ $item->rowId }}')"><i
                                class="fa-solid fa-trash-can" style="color: #fafafa;"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- @if (Session::has('success_message'))
    <div class="message">
        <strong>Success | {{ Session::get('success_message') }}</strong>
    </div>
    @endif --}}
    <div class="clear">
      <a href="#" class="text-muted" style="color: #f5f5f5;" wire:click.prevent="clearAll()"><i class="fa-solid fa-xmark"></i>Clear Cart</a>
    </div>
    <div class="tabl_btn">
        <a class="btn" href="{{ asset('shop') }}">Continue Shopping</a>
    </div>
    <div class="tab__total">
        <h4>Total Cart</h4>
        <table class="cart__total">
            <tbody>
                <tr>
                    <td>Cart Subtotal</td>
                    <td><span>${{ Cart::subtotal(0.1) }}</span></td>
                </tr>
                {{-- <tr>
                    <td>Tax</td>
                    <td><span>${{ Cart::tax() }}</span></td>
                </tr> --}}
                <tr>
                    <td>Discount code</td>
                    <td> <i class="ti-gift mr-5"></i>None</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><span>${{ Cart::subtotal(0.1) }}</span></td>
                </tr>
            </tbody>
        </table>
        <a href="checkout.html" class="btn">Proceed To CheckOut</a>
    </div>
</div>
