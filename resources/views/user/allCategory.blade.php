@extends('user.inc.app')
@section('content')
<!-- Breadcrumb -->
<div class="container">
	<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
		<div class="f2-s-1 p-r-30 m-tb-6">
			<a href="/" class="breadcrumb-item f1-s-3 cl9">
				Home
			</a>
			<a href="#" class="breadcrumb-item f1-s-3 cl9">
				All Category
			</a>
		</div>
		<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
			<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
			<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
			<i class="zmdi zmdi-search"></i>
			</button>
		</div>
	</div>
</div>
<!-- Page heading -->
<div class="container p-t-4 p-b-40">
	<h2 class="f1-l-1 cl2">
	All Category
	</h2>
</div>
<section class="bg0">
		<div class="container">
			<div class="row m-rl--1">
				<div class="col-md-12 p-rl-1">
					<div class="row m-rl--1">
						@if ($category)
							@foreach ($category as $cat)
								<div class="col-sm-6 p-rl-1 p-b-2">
							<div class="bg-img1 size-a-14 how1 pos-relative" style="background-image: url(/storage/catImages/{{$cat->catImages}});">
								<a href="/category/{{$cat->id}}" class="dis-block how1-child1 trans-03"></a>

								<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
									<a href="/category/{{$cat->id}}/sub" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
										In {{$cat->type}}
									</a>
								</div>
							</div>
						</div>
							@endforeach
						@endif
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection