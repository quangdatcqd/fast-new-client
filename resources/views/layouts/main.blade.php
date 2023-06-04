<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="{{ asset('/') }}">
    <title>@yield('title')</title>
    <link href="css/media_query.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link href="css/style_1.css" rel="stylesheet" type="text/css" />
    <!-- Modernizr JS -->
    <script src="js/modernizr-3.5.0.min.js"></script>
</head>

<body class="single">
    <div class="container-fluid fh5co_header_bg">
        <div class="container">
            <div class="row">
                <div class="col-12 fh5co_mediya_center"><a href="#" class="color_fff fh5co_mediya_setting"><i
                            class="fa fa-clock-o"></i>&nbsp;<span id="clock"></span> </a>
                    <div class="d-inline-block fh5co_trading_posotion_relative"><a href="#"
                            class="treding_btn">Tin nhanh</a>
                        <div class="fh5co_treding_position_absolute"></div>
                    </div>
                    <a href="#" class="color_fff fh5co_mediya_setting">Trang tin tức mới nhất. Cập nhật liên
                        tục</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 fh5co_padding_menu">
                    <img src="images/logo.png" alt="img" class="fh5co_logo_width" />
                </div>
                <div class="col-12 col-md-9    fh5co_padding_menu header-left-box">
                    <div class="text-center d-inline-block">
                        <a href="{{ route('post.search', ['keyword' => ' ']) }}" class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-search"></i></div>
                        </a>
                    </div>


                    {{-- <div class="text-center d-inline-block">
                        <a href="https://fb.com/datcqd" target="_blank" class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                        </a>
                    </div> --}}
                    @guest
                        <div class="text-center   ">
                            <a href="{{ route('login') }}">Đăng nhập</a>
                        </div>
                    @else
                        <div class="text-center  div-user-" id="box-account">
                            <div class="div-avatar-header">
                                @if (Auth::user()->avatar)
                                    <img src="{{ Auth::user()->avatar }}" alt="">
                                @else
                                    <div>{{ substr(Auth::user()->name, 0, 1) }} </div>
                                @endif


                            </div>
                            <div class="box-user-dropdown" id="box-user-dropdown">
                                <div class="name-user-account">

                                    <i class="fa fa-user-secret"></i>
                                    <span>{{ Auth::user()->name }}</span>
                                </div>
                                <hr class="m-0">
                                <a href="">
                                    <div><i class="fa fa-user-circle-o"></i> Thông tin</div>
                                </a>
                                <a href="">
                                    <div><i class="fa fa-eye"></i> Tin đã xem</div>
                                </a>
                                <a href="">
                                    <div><i class="fa fa-lock px-1"></i> Đổi mật khẩu</div>
                                </a>
                                <hr class="m-0">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <div>
                                        <i class="fa fa-sign-out pl-1"></i> Đăng xuất
                                    </div>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </a>


                            </div>
                        </div>
                    @endguest
                    <!--<div class="d-inline-block text-center"><img src="images/country.png" alt="img" class="fh5co_country_width"/></div>-->

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid    ">
        <div class="container px-0 ">
            <nav class="navbar navbar-toggleable-md navbar-light py-2 px-0 border-bottom-yellow ">
                @include('layouts.menu')
            </nav>
        </div>
    </div>

    @yield('main')
    <div class="container-fluid fh5co_footer_right_reserved">
        <div class="container">
            <div class="row  ">
                <div class="col-12 col-md-6 py-4 Reserved"> © Copyright 2023, All rights reserved. Design by <a
                        href="https://freehtml5.co" title="Free HTML5 Bootstrap templates">cqdgo.com</a>. </div>
                <div class="col-12 col-md-6 spdp_right py-4">
                    <a href="#" class="footer_last_part_menu">Home</a>
                    <a href="Contact_us.html" class="footer_last_part_menu">About</a>
                    <a href="Contact_us.html" class="footer_last_part_menu">Contact</a>
                    <a href="blog.html" class="footer_last_part_menu">Latest News</a>
                </div>
            </div>
        </div>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous">
    </script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous">
    </script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <script>
        if (!navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i)) {
            $(window).stellar();
        }
    </script>
    <!-- Main -->
    <script src="js/main.js"></script>


    <script src="js/moment.min.js"></script>
    <script src="js/moment-vi.min.js"></script>

    <script src="js/custom.js"></script>
</body>

</html>
