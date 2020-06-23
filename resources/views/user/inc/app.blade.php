<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MyNews</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/util.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/main.css">
    </head>
    <body class="animsition">
        
        <!-- Header -->
        <header>
            <!-- Header desktop -->
            <div class="container-menu-desktop">
                @include('user.inc.topbar')

                @include('user.inc.mobileMenu')
                
                <!--  -->
                <div class="wrap-logo container">
                    <!-- Logo desktop -->
                    <div class="logo">
                        <a href="/"><img src="{{ asset('assets') }}/images/icons/logo-01.png" alt="LOGO"></a>
                    </div>
                    <!-- Banner -->
                    <div class="banner-header">
                        <a href="#"><img src="{{ asset('assets') }}/images/banner-01.jpg" alt="IMG"></a>
                    </div>
                </div>
                
                @include('user.inc.menu')
            </div>
        </header>
        @yield('content')
        <!-- Footer -->
        <footer>
            <div class="bg2 p-t-40 p-b-25">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 p-b-20">
                            <div class="size-h-3 flex-s-c">
                                <a href="/">
                                    <img class="max-s-full" src="{{ asset('assets') }}/images/icons/logo-02.png" alt="LOGO">
                                </a>
                            </div>
                            <div>
                                <p class="f1-s-1 cl11 p-b-16">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempor magna eget elit efficitur, at accumsan sem placerat. Nulla tellus libero, mattis nec molestie at, facilisis ut turpis. Vestibulum dolor metus, tincidunt eget odio
                                </p>
                                <p class="f1-s-1 cl11 p-b-16">
                                    Any questions? Call us on (+1) 96 716 6879
                                </p>
                                <div class="p-t-15">
                                    <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                        <span class="fab fa-facebook-f"></span>
                                    </a>
                                    <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                    <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                        <span class="fab fa-pinterest-p"></span>
                                    </a>
                                    <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                        <span class="fab fa-vimeo-v"></span>
                                    </a>
                                    <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                        <span class="fab fa-youtube"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 p-b-20">
                            <div class="size-h-3 flex-s-c">
                                <h5 class="f1-m-7 cl0">
                                Popular Posts
                                </h5>
                            </div>
                            <ul>
                                <li class="flex-wr-sb-s p-b-20">
                                    <a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
                                        <img src="{{ asset('assets') }}/images/popular-post-01.jpg" alt="IMG">
                                    </a>
                                    <div class="size-w-5">
                                        <h6 class="p-b-5">
                                        <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
                                            Donec metus orci, malesuada et lectus vitae
                                        </a>
                                        </h6>
                                        <span class="f1-s-3 cl6">
                                            Feb 17
                                        </span>
                                    </div>
                                </li>
                                <li class="flex-wr-sb-s p-b-20">
                                    <a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
                                        <img src="{{ asset('assets') }}/images/popular-post-02.jpg" alt="IMG">
                                    </a>
                                    <div class="size-w-5">
                                        <h6 class="p-b-5">
                                        <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
                                            Lorem ipsum dolor sit amet, consectetur
                                        </a>
                                        </h6>
                                        <span class="f1-s-3 cl6">
                                            Feb 16
                                        </span>
                                    </div>
                                </li>
                                <li class="flex-wr-sb-s p-b-20">
                                    <a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
                                        <img src="{{ asset('assets') }}/images/popular-post-03.jpg" alt="IMG">
                                    </a>
                                    <div class="size-w-5">
                                        <h6 class="p-b-5">
                                        <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
                                            Suspendisse dictum enim quis imperdiet auctor
                                        </a>
                                        </h6>
                                        <span class="f1-s-3 cl6">
                                            Feb 15
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-lg-4 p-b-20">
                            <div class="size-h-3 flex-s-c">
                                <h5 class="f1-m-7 cl0">
                                Category
                                </h5>
                            </div>
                            <ul class="m-t--12">
                                <li class="how-bor1 p-rl-5 p-tb-10">
                                    <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                        Fashion (22)
                                    </a>
                                </li>
                                <li class="how-bor1 p-rl-5 p-tb-10">
                                    <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                        Technology (29)
                                    </a>
                                </li>
                                <li class="how-bor1 p-rl-5 p-tb-10">
                                    <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                        Street Style (15)
                                    </a>
                                </li>
                                <li class="how-bor1 p-rl-5 p-tb-10">
                                    <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                        Life Style (28)
                                    </a>
                                </li>
                                <li class="how-bor1 p-rl-5 p-tb-10">
                                    <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                        DIY & Crafts (16)
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg11">
                <div class="container size-h-4 flex-c-c p-tb-15">
                    <span class="f1-s-1 cl0 txt-center">
                        Copyright © 2018
                        <a href="#" class="f1-s-1 cl10 hov-link1"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </span>
                </div>
            </div>
        </footer>
        <!-- Back to top -->
        <div class="btn-back-to-top" id="myBtn">
            <span class="symbol-btn-back-to-top">
                <span class="fas fa-angle-up"></span>
            </span>
        </div>
        <!-- Modal Video 01-->
        <div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document" data-dismiss="modal">
                <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>
                <div class="wrap-video-mo-01">
                    <div class="video-mo-01">
                        <iframe src="https://www.youtube.com/embed/wJnBTPUQS5A?rel=0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('assets') }}/vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="{{ asset('assets') }}/vendor/animsition/js/animsition.min.js"></script>
        <script src="{{ asset('assets') }}/vendor/bootstrap/js/popper.js"></script>
        <script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{ asset('assets') }}/js/main.js"></script>
    </body>
</html>