{{-- <div class="site-wrap"> --}}


    <div class="site-navbar py-2">

        <div class="search-wrap">
            <div class="container">
                <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
                <form action="#" method="post">
                    <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
                </form>
            </div>
        </div>

        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="logo">
                    <div class="site-logo">
                        <a href="index.html" class="js-logo-clone"><strong
                                class="text-primary">Pharma</strong>tive</a>
                    </div>
                </div>
                <div class="main-nav d-none d-lg-block">
                    <nav class="site-navigation text-right text-md-center" role="navigation">
                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li class="active"><a href="{{route('home')}}">Home</a></li>
                            <li><a href="shop.html">Store</a></li>
                            <li class="has-children">
                                <a href="#">Products</a>
                                <ul class="dropdown">
                                    <li><a href="#">Supplements</a></li>
                                    <li class="has-children">
                                        <a href="#">Vitamins</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Supplements</a></li>
                                            <li><a href="#">Vitamins</a></li>
                                            <li><a href="#">Diet &amp; Nutrition</a></li>
                                            <li><a href="#">Tea &amp; Coffee</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Diet &amp; Nutrition</a></li>
                                    <li><a href="#">Tea &amp; Coffee</a></li>

                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                {{-- <div class="icons">
                    <a href="{{ route('medicines.index') }}" class="icons-btn d-inline-block" ><span
                            class="icon-search"></span></a>
                    {{-- <form action="{{ route('medicines.index') }}" class="icons-btn d-inline-block bag"> </form> --}}
                     {{--   <span class="icon-shopping-bag"></span>
                        <span class="number">2</span>

                    <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                            class="icon-menu"></span></a>
                </div> --}}
                <form class="form-inline my-2 my-lg-0" action="{{ route('medicines.index') }}" method="GET">
                    <input type="hidden" name="category" value="{{ request()->category }}">
                    <input class="form-control mr-sm-2" type="search" name="q" placeholder="Search"
                    value="{{ request()->q }}" aria-label="Search">

                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>


                @auth
                <div class="nav-item px-3">
                    Hello {{ auth()->user()->name }}
                </div>
                <form class="form-inline my-2 my-lg-0" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
                </form>
            @endauth

            @guest
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            @endguest
            </div>
        </div>
    {{-- </div> --}}
    {{-- @push('css')
    <style>
        .navbar {
            background-color: #011f9e;
        }

    </style>
    @endpush --}}
