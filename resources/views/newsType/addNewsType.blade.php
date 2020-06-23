@extends('layouts.app', [
    'title' => 'Add new Category'
])
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">{{__('Add News Category')}}<a href="#help"><i class="fa fa-question-circle float-right"></i></a></div>
				<div class="card-body">
					<form action="/types" method="POST">
						@csrf

						<div class="form-group">
							<label for="type">News Category/Sub-category</label>
							<input type="text" class="form-control" name="type" aria-describedby="typeHelp" placeholder="Sport">
							<small id="typeHelp" class="form-text text-muted">* Add category of news like 'Entertainment', 'Economy' etc.</small>
						</div>


						<div class="form-group">
							<input type="checkbox" id="myCheck" name="myCheck" onclick="myFunction()">
							<label for="myCheck">Has news Type/Category</label>
							<select class="form-control" name="p_id"  id="text" style="display:none">
								@if (count($types) > 0)
									<option selected disabled>Select Category/Type</option>
									@foreach ($types as $type)
										<option value="{{$type->id}}">{{$type->type}}</option>
									@endforeach
									@else
									<option disabled selected>No Category added yet!</option>
								@endif
							</select>
						</div>

						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
@endsection