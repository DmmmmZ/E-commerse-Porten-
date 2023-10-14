<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="icon" href="{{ asset('assets/img/watch.png') }}" type="image/x-icon">
    <title>Porten</title>
    @livewireStyles
</head>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<body>
    <header class="header">
        <div class="header__body">
            <a href="{{ route('home.index') }}" class="header__logo">PORTEN</a>
            <div class="header__burger">
                <span></span>
            </div>
            <nav class="header__menu">
                <ul class="header__list">
                    <li>
                        <a href="{{ route('shop') }}" class="header__link">Shop</a>
                    </li>
                    <li>
                        <a href="{{route('galery')}}" class="header__link">Galery</a>
                    </li>
                    @auth
                        <li class="dropdown">
                            <a href="#" class="header__link dropbtn">My acount &#9660</a>
                            @if (Auth::user()->utype == 'ADM')
                                <ul class="dropdown-content">
                                    <li id="dr"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                    <li id="dr"><a href="{{route('admin.products')}}">Products</a></li>
                                    <li id="dr"><a href="{{ route('admin.categories') }}">Categories</a></li>
                                    <li id="dr"><a href="{{ route('admin.home.slider')}}">Manage Slider</a></li>
                                    <li id="dr"><a href="#">Customers</a></li>
                                </ul>
                            @else
                                <ul class="dropdown-content">
                                    <li id="dr"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                </ul>
                            @endif
                        </li>
                    @endif
                        @auth
                            <li>
                                <div class="login">
                                    {{ Auth::user()->name }}
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); this.closest('form').submit();">Log out</a>
                                    </form>
                                </div>
                            </li>
                        @else
                            <li class="login">
                                <a href="{{ route('login') }}" class="header__link"><i class="fa-solid fa-user"
                                        style="color: #969696;"></i></a>
                            </li>
                            @endif
                            @livewire('wish-list-icon-component')
                            @livewire('cart-icon-component')
                        </ul>
                    </nav>
                </div>
            </header>

            {{ $slot }}

            <footer>
                <div class="fo">
                    <div class="foo">
                        <div class="foo_block">
                            <h3>О магазині</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mi semper viverra nunc cursus tortor
                                lectus nunc
                                nulla nibh. Egestas amet consectetur vel vitae aliquam dictum suspendisse. Lobortis eget
                                consequat, tellus
                                et et sed turpis. Pretium quisque vitae, amet, porttitor odio ultricies massa pharetra leo. Et
                                ipsum urna
                                fames in sit mi ultrices nisi, nunc.</p>
                        </div>
                        <div class="foo_block" id="block_too">
                            <h3>Соціальні мережі</h3>
                            <a href="#" id="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" id="twitter"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" id="instagram"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" id="youtube"><i class="fa-brands fa-youtube"></i></a>
                            <a href="#" id="pinterest"><i class="fa-brands fa-pinterest-p"></i></a>
                        </div>
                        <div class="foo_block">
                            <h3>Розсилка</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mi semper viverra nunc cursus tortor
                                lectus nunc
                                nulla nibh.</p>
                            <input type="text" placeholder="Ваша пошта" id="post">
                            <input type="button" value="+" id="sub">
                        </div>
                    </div>
                </div>
                <div class="niz">
                    <p>© 2023 Усі права захищенно</p>
                </div>
            </footer>
            <script src="{{ asset('assets/js/main.js') }}"></script>
            <script src="{{ asset('assets/js/side.js') }}"></script>
            <script src="https://kit.fontawesome.com/b4f6b20d32.js" crossorigin="anonymous"></script>
            @livewireScripts
            @stack('scripts')
        </body>

        </html>
