@extends('layouts.app', [
    'title' => 'Add new News'
])
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">{{__('Add New News')}}<a href="#help"><i class="fa fa-question-circle float-right"></i></a></div>
				<div class="card-body">
					<form action="/posts" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="newsTitle">News Title</label>
							<input type="text" class="form-control" name="newsTitle" placeholder="Title">
						</div>
						<div class="form-group">
							<label for="newsCategory">News Category</label>
							<select class="form-control" name="newsCategory">
								@if (count($category))
								<option selected disabled>Select Category</option>
								@foreach ($category as $key)
								<option value="{{$key->id}}">{{$key->type}}</option>
								@foreach ($key->subType as $sub)
								<option value="{{$sub->id}}">• {{ $sub->type }}
								</option>
								@endforeach
								@endforeach
								@else
								<option>No Category added yet.</option>
								@endif
							</select>
						</div>
						<div class="form-group">
							<label for="newsStatus">News Status</label>
							<select name="newsStatus" class="form-control">
								<option value="1">Publish now</option>
								<option value="0">Save to draft</option>
							</select>
						</div>
						<div class="form-group">
							<label for="newsImage">News Cover Image</label>
							<input type="file" accept="image/*" name="newsImage" class="form-control-file">
						</div>
						<div class="form-group">
							<label for="newsContent">News Content</label>
							<textarea rows="10" class="form-control" name="newsContent" placeholder="News content here"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection