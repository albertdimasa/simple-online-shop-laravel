<!-- Start Main Top -->
<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                    aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ route('welcome') }}">
                    <img src="{{ asset('theme') }}/images/tali-tani.png" class="logo" alt="logo"
                        style="height: 120px; object-fit: cover;">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item {{ Route::is('welcome') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li class="nav-item {{ Route::is('shop') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('shop') }}">Shop</a>
                    </li>
                    <li class="nav-item {{ Route::is('about') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item {{ Route::is('cart') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('cart') }}">Cart</a>
                    </li>
                    {{-- <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                        <ul class="dropdown-menu">
                            <li><a href="shop.html">Sidebar Shop</a></li>
                            <li><a href="shop-detail.html">Shop Detail</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li> --}}
                    <li class="nav-item {{ Route::is('contact') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                @if (Auth::check())
                    <div class="d-flex">
                        <a href="{{ route('home') }}" class="btn btn-info btn-sm mr-3">Beranda</a>
                        <form action="{{ route('logout') }}"method="post">
                            @csrf
                            <button class="btn btn-dark btn-sm" type="submit">
                                Logout
                            </button>
                        </form>
                    </div>
                @else
                    <div class="d-flex">
                        <a href="{{ route('login') }}" class="mr-3">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-warning btn-sm">Register</a>
                    </div>
                @endif
            </div>
            <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
        {{-- <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <li class="cart-box">
                <ul class="cart-list">
                    <li>
                        <a href="#" class="photo"><img src="{{ asset('theme') }}/images/img-pro-01.jpg"
                                class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Delica omtantur </a></h6>
                        <p>1x - <span class="price">$80.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="{{ asset('theme') }}/images/img-pro-02.jpg"
                                class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Omnes ocurreret</a></h6>
                        <p>1x - <span class="price">$60.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="{{ asset('theme') }}/images/img-pro-03.jpg"
                                class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Agam facilisis</a></h6>
                        <p>1x - <span class="price">$40.00</span></p>
                    </li>
                    <li class="total">
                        <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                        <span class="float-right"><strong>Total</strong>: $180.00</span>
                    </li>
                </ul>
            </li>
        </div> --}}
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Main Top -->
