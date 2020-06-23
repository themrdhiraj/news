@extends('layouts.app', [
    'title' => 'Edit News'
])
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">{{__('Edit News')}}<a href="#help"><i class="fa fa-question-circle float-right"></i></a></div>
				<div class="card-body">
					<form action="/posts/{{$post->id}}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label for="newsTitle">News Title</label>
							<input value="{{$post->newsTitle}}" type="text" class="form-control" name="newsTitle" placeholder="Title">
						</div>
						<div class="form-group">
							<label for="newsCategory">News Category</label>
							<select class="form-control" name="newsCategory">
								@foreach ($category as $key)
								<option value="{{$key->id}}" @if ($post->newsCategory == $key->id)
									selected
								@endif>{{$key->type}}</option>
								@foreach ($key->subType as $sub)
								<option value="{{$sub->id}}" @if ($post->newsCategory == $sub->id)
									selected
								@endif>• {{ $sub->type }}
								</option>
								@endforeach
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="newsStatus">News Status</label>
							<select name="newsStatus" class="form-control">
								<option value="1" @if ($post->newsStatus == 1)
									selected
								@endif>Publish</option>
								<option value="0" @if ($post->newsStatus == 0)
									selected
								@endif>Save to draft</option>
							</select>
						</div>
						<div class="form-group">
							<label for="newsImage">News Cover Image</label>
							<input value="{{$post->newsImage}}" type="file" accept="image/*" name="newsImage" class="form-control-file">
							<br>
							<img src="/storage/newsImages/{{$post->newsImage}}" height="50" alt="{{$post->newsImage}}">
						</div>
						<div class="form-group">
							<label for="newsContent">News Content</label>
							<textarea rows="10" class="form-control" name="newsContent" placeholder="News content here">{{$post->newsContent}}</textarea>
						</div>
						<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
						<a href="/posts" class="btn btn-secondary float-right">Cancel</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection