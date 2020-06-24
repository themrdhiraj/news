@extends('user.inc.app')
@section('content')
<!-- Content -->
<section class="bg0 p-b-140 p-t-10">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-8 p-b-30">
				<div class="p-r-10 p-r-0-sr991">
					<!-- Blog Detail -->
					<div class="p-b-70">
						<a href="/category/{{$news[0]->newsCategory}}" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
							{{$news[0]->type}}
						</a>
						<h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
						{{$news[0]->newsTitle}}
						</h3>
						
						<div class="flex-wr-s-s p-b-40">
							<span class="f1-s-3 cl8 m-r-15">
								<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
									by {{$news[0]->name}}
								</a>
								<span class="m-rl-3">-</span>
								<span>
									{{$news[0]->created_at}}
								</span>
							</span>
							<span class="f1-s-3 cl8 m-r-15">
								5239 Views
							</span>
							<a href="#" class="f1-s-3 cl8 hov-cl10 trans-03 m-r-15">
								0 Comment
							</a>
						</div>
						<div class="wrap-pic-max-w p-b-30">
							<img src="/storage/newsImages/{{$news[0]->newsImage}}" alt="{{$news[0]->newsImage}}">
						</div>
						<p class="f1-s-11 cl6 p-b-25">
							{{$news[0]->newsContent}}
						</p>
						<!-- Share -->
						<div class="flex-s-s">
							<span class="f1-s-12 cl5 p-t-1 m-r-15">
								Share:
							</span>
							
							<div class="flex-wr-s-s size-w-0">
								<a href="#" class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
									<i class="fab fa-facebook-f m-r-7"></i>
									Facebook
								</a>
								<a href="#" class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
									<i class="fab fa-twitter m-r-7"></i>
									Twitter
								</a>
								<a href="#" class="dis-block f1-s-13 cl0 bg-google borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
									<i class="fab fa-google-plus-g m-r-7"></i>
									Google+
								</a>
								<a href="#" class="dis-block f1-s-13 cl0 bg-pinterest borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
									<i class="fab fa-pinterest-p m-r-7"></i>
									Pinterest
								</a>
							</div>
						</div>
					</div>
					<!-- Leave a comment -->
					<div>
						<h4 class="f1-l-4 cl3 p-b-12">
						Leave a Comment
						</h4>
						<p class="f1-s-13 cl8 p-b-40">
							Your email address will not be published. Required fields are marked *
						</p>
						<form>
							<textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20" name="msg" placeholder="Comment..."></textarea>
							<input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="name" placeholder="Name*">
							<input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="email" placeholder="Email*">
							<input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="website" placeholder="Website">
							<button class="size-a-17 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-10">
							Post Comment
							</button>
						</form>
					</div>
				</div>
			</div>
			
			<!-- Sidebar -->
			<div class="col-md-10 col-lg-4 p-b-30">
				<div class="p-l-10 p-rl-0-sr991 p-t-70">
					<!-- Popular Posts -->
					<div class="p-b-30">
						<div class="how2 how2-cl4 flex-s-c">
							<h3 class="f1-m-2 cl3 tab01-title">
							Popular Post
							</h3>
						</div>
						<ul class="p-t-35">
							<li class="flex-wr-sb-s p-b-30">
								<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
									<img src="images/popular-post-04.jpg" alt="IMG">
								</a>
								<div class="size-w-11">
									<h6 class="p-b-4">
									<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
										Donec metus orci, malesuada et lectus vitae
									</a>
									</h6>
									<span class="cl8 txt-center p-b-24">
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
							</li>
							<li class="flex-wr-sb-s p-b-30">
								<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
									<img src="images/popular-post-05.jpg" alt="IMG">
								</a>
								<div class="size-w-11">
									<h6 class="p-b-4">
									<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
										Donec metus orci, malesuada et lectus vitae
									</a>
									</h6>
									<span class="cl8 txt-center p-b-24">
										<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
											Game
										</a>
										<span class="f1-s-3 m-rl-3">
											-
										</span>
										<span class="f1-s-3">
											Feb 16
										</span>
									</span>
								</div>
							</li>
							<li class="flex-wr-sb-s p-b-30">
								<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
									<img src="images/popular-post-06.jpg" alt="IMG">
								</a>
								<div class="size-w-11">
									<h6 class="p-b-4">
									<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
										Donec metus orci, malesuada et lectus vitae
									</a>
									</h6>
									<span class="cl8 txt-center p-b-24">
										<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
											Celebrity
										</a>
										<span class="f1-s-3 m-rl-3">
											-
										</span>
										<span class="f1-s-3">
											Feb 12
										</span>
									</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection