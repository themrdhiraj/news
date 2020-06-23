<div class="wrap-main-nav">
    <div class="main-nav">
        <!-- Menu desktop -->
        <nav class="menu-desktop">
            <a class="logo-stick" href="/">
                <img src="{{ asset('assets') }}/images/icons/logo-01.png" alt="LOGO">
            </a>
            <ul class="main-menu">
                <li class="main-menu-active">
                    <a href="/">Home</a>
                </li>
                <li class="mega-menu-item">
                    <a href="/category">News</a>
                    <div class="sub-mega-menu">
                        <div class="nav flex-column nav-pills" role="tablist">
                            <a class="nav-link active" data-toggle="pill" href="#news-0" role="tab">All</a>
                            @if (count($category))
                            @php
                            $i = 1;
                            @endphp
                            @foreach ($category as $cat)
                            <a class="nav-link" data-toggle="pill" href="#news-{{$i++}}" role="tab">{{$cat->type}}</a>
                            @endforeach
                            @endif
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="news-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-05.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-10.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Finance
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Jan 15
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-14.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Beach
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-36.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Technology
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Jan 20
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="news-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-50.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-08.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-07.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Jan 20
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-06.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Jan 15
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="news-2" role="tabpanel">
                                <div class="row">
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-21.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-24.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Jan 15
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-22.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-23.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Jan 20
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="news-3" role="tabpanel">
                                <div class="row">
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-25.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-27.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Jan 20
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-26.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-34.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Jan 15
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="news-4" role="tabpanel">
                                <div class="row">
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-35.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-36.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-37.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Jan 20
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-38.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Jan 15
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="news-5" role="tabpanel">
                                <div class="row">
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-39.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-41.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Jan 20
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-42.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Jan 15
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-40.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                @if (count($category))
                    @foreach ($category as $cat)
                    @if ($cat == ($category[8]) ?? '')
                        @php
                            break ;
                        @endphp
                    @endif
                <li class="mega-menu-item">
                    <a href="{{$cat->id}}">{{$cat->type}} </a>
                    <div class="sub-mega-menu">
                        <div class="nav flex-column nav-pills" role="tablist">
                            <a class="nav-link active" data-toggle="pill" href="#enter-1" role="tab">All</a>
                            
                            @foreach ($cat->subType as $sub)
                            <a class="nav-link" data-toggle="pill" href="#enter-{{$i++}}" role="tab">{{$sub->type}}</a>
                            @endforeach
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="enter-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-25.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-27.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Jan 20
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-26.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-34.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Jan 15
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="enter-2" role="tabpanel">
                                <div class="row">
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-35.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-36.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-37.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Jan 20
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- Item post -->
                                        <div>
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets') }}/images/post-38.jpg" alt="IMG">
                                            </a>
                                            <div class="p-t-10">
                                                <h5 class="p-b-5">
                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    Donec metus orci, malesuada et lectus vitae
                                                </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        Jan 15
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
                @endif
            </ul>
        </nav>
    </div>
</div>