@extends('user.inc.app')
@section('content')
<!-- Headline -->
<div class="container">
    <div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
        <div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
            <span class="text-uppercase cl2 p-r-8">
                Trending Now:
            </span>
            <span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown">
                <span class="dis-inline-block slide100-txt-item animated visible-false">
                    Interest rate angst trips up US equity bull market
                </span>
                
                <span class="dis-inline-block slide100-txt-item animated visible-false">
                    Designer fashion show kicks off Variety Week
                </span>
                <span class="dis-inline-block slide100-txt-item animated visible-false">
                    Microsoft quisque at ipsum vel orci eleifend ultrices
                </span>
            </span>
        </div>
        <div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
            <input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
            <button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
            <i class="zmdi zmdi-search"></i>
            </button>
        </div>
    </div>
</div>
<!-- Feature post -->
<section class="bg0">
    <div class="container">
        <div class="row m-rl--1">
            <div class="col-md-6 p-rl-1 p-b-2">
                <div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url({{ asset('assets') }}/images/post-01.jpg);">
                    <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>
                    <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                        <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                            Business
                        </a>
                        <h3 class="how1-child2 m-t-14 m-b-10">
                        <a href="blog-detail-01.html" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
                            Microsoft quisque at ipsum vel orci eleifend ultrices
                        </a>
                        </h3>
                        <span class="how1-child2">
                            <span class="f1-s-4 cl11">
                                Jack Sims
                            </span>
                            <span class="f1-s-3 cl11 m-rl-3">
                                -
                            </span>
                            <span class="f1-s-3 cl11">
                                Feb 16
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-rl-1">
                <div class="row m-rl--1">
                    <div class="col-12 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-4 how1 pos-relative" style="background-image: url({{ asset('assets') }}/images/post-02.jpg);">
                            <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>
                            <div class="flex-col-e-s s-full p-rl-25 p-tb-24">
                                <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                    Culture
                                </a>
                                <h3 class="how1-child2 m-t-14">
                                <a href="blog-detail-01.html" class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03">
                                    London ipsum dolor sit amet, consectetur adipiscing elit.
                                </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url({{ asset('assets') }}/images/post-03.jpg);">
                            <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>
                            <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                    Life Style
                                </a>
                                <h3 class="how1-child2 m-t-14">
                                <a href="blog-detail-01.html" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                    Pellentesque dui nibh, pellen-tesque ut dapibus ut
                                </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url({{ asset('assets') }}/images/post-04.jpg);">
                            <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>
                            <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                    Sport
                                </a>
                                <h3 class="how1-child2 m-t-14">
                                <a href="blog-detail-01.html" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                    Motobike Vestibulum vene-natis purus nec nibh volutpat
                                </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    @include('user.inc.posts')
<!-- Banner -->
<div class="container">
    <div class="flex-c-c">
        <a href="#">
            <img class="max-w-full" src="{{ asset('assets') }}/images/banner-01.jpg" alt="IMG">
        </a>
    </div>
</div>
@endsection