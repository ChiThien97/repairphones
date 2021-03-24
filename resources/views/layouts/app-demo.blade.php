<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="navbar-main bg-white fixed-top shadow-sm">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-white p-0">
                    <a class="navbar-brand" href="{{ url('/home-demo') }}">
                        <h2 style="color: #000;">Repair<span style="color: #ee5057;">phoneS</span></h2>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('home-demo') }}"> Trang chủ <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route('danh-muc.index') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Danh mục
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach( $danhmucs as $danhmuc)
                                <a class="dropdown-item" href="{{ route('danh-muc.show', $danhmuc->id) }}">{{ $danhmuc->name_cate }}</a>
                                @endforeach
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dịch vụ
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach( $dichvus as $dichvu)
                                <a class="dropdown-item" href="{{ route('dich-vu.show', $dichvu->id) }}">{{ $dichvu->name_service }}</a>
                                @endforeach
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> Chính sách </a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            @csrf
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="form-control btn-outline-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    </div>
                </nav>
            </div>
        </div>
        <main class="py-3 mt-5" style="min-height:550px !important">
            @yield('content')
        </main>
        
        <!-- Footer Section Begin -->
        <footer class="footer bg-white" style="box-shadow: 0 0 0.5rem 0.2rem rgba(0, 0, 0, 0.15) !important;">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__about">
                            <div class="footer__about__logo">
                            <h2> <strong style="color: #000;">Repair<span style="color: #ee5057;">phoneS</span></strong></h2>
                            </div>
                            <ul>
                                <li>180 Cao Lỗ, Phường 4, Quận 8, Hồ Chí Minh</li>
                                <li>Phone: +84 000 999</li>
                                <li>Email: support@repairphones.com</li>
                                <li><a style="color:#7e7e7e" href="{{ route('phan-cong') }}">Phân công công việc nhóm</a></li>
                                <div class="footer__copyright__payment"><img src="{{ asset('images/payment-item.png')}}" alt=""></div>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                        <div class="footer__about">
                            <h3 class="nv"><strong>Thành viên</strong></h3>
                            <ul>
                                <li>Thiều Chí Thiện</li>
                                <li>Đặng Hoàng Huy</li>
                                <li>Trần Chí Hữu</li>
                                <li>Nguyễn Thành Liêm</li>
                                <li>Nguyễn Kim Long</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="footer__widget">
                            <h3>Đăng kí nhận tin</h3>
                            <p>Nhập địa chỉ e-mail để nhận thông tin khuyến mại, tin tức một cách sớm nhất</p>
                            <form class="form-group input-group" action="#">
                                @csrf
                                <input class="form-control mr-sm-2" type="text" placeholder="Enter your mail" aria-describedby="btnGroupMail">
                                <button id="btnGroupMail" type="submit" class="input-group-text btn btn-secondary">Subscribe</button>
                            </form>
                            <div class="footer__widget__social">
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-instagram-square"></i></a>
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-pinterest-square"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->
    </div>
</body>
</html>
