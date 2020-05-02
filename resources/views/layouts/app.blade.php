<!DOCTYPE html>
<html lang="en">
<head>
    @includeIf('html.head')
</head>
<body>
<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="header-content h-100 d-flex align-items-center justify-content-between">
                        <div class="academy-logo">
                            <a href="{{url('/')}}"><img src={{asset("img/core-img/logo.png")}} alt=""></a>
                        </div>
                            <div class="login-content">
                                <a href="{{url('/login')}}" style="padding-right:10px">Login</a>
                                <a href="{{url('/register')}}">Register</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="academy-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="academyNav">

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="{{url('/blog')}}">Blog</a></li>
                                        <li><a href="{{url('/post')}}">Post</a></li>
                                        <li><a class="dropdown-item" href="{{url('/post_detail')}}">WORKSHOP</a></li>
                                        <li><a class="dropdown-item" href="{{url('/scholarships')}}">SCHOLARSHIPS</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('/about_us')}}">About Us</a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li>
                                <li><a href="{{url('/donate')}}">Donate</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>

                    <!-- Calling Info -->
                    <div class="calling-info">
                        <div class="call-center">
                            <a href="tel:+654563325568889"><i class="icon-telephone-2"></i> <span>(+65) 456 332 5568 889</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- ##### Header Area End ##### -->

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image:url({{asset("img/bg-img/breadcumb.jpg")}});">
    <div class="bradcumbContent">
        <h2>Welcome</h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

    @yield('content')


    @includeIf('html.footer')

    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>


    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src={{asset("js/jquery/jquery-2.2.4.min.js")}}></script>
    <!-- Popper js -->
    <script src={{asset("js/bootstrap/popper.min.js")}}></script>
    <!-- Bootstrap js -->
    <script src={{asset("js/bootstrap/bootstrap.min.js")}}></script>
    <!-- All Plugins js -->
    <script src={{asset("js/plugins/plugins.js")}}></script>
    <!-- Active js -->
    <script src={{asset("js/active.js")}}></script>
</body>
</html>
