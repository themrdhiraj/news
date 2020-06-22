@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">{{__('Add Types')}}</div>
				<div class="card-body">
					<form action="/types" method="POST">
						@csrf
						<div class="form-group">
							<label for="type">News Type/Category</label>
							<input type="text" class="form-control" name="type" aria-describedby="typeHelp" placeholder="Entertainment">
							<small id="typeHelp" class="form-text text-muted">* Add the types or category of news like 'Entertainment', 'Business' etc.</small>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">{{__('Add Sub-Types')}}</div>
				<div class="card-body">
					<form action="/types" method="POST">
						@csrf
						<div class="form-group">
							<label for="type">Select news Type/Category</label>
							<select class="form-control" name="p_id">
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

						<div class="form-group">
							<label for="type">News Sub-Type/Sub-Category</label>
							<input type="text" class="form-control" name="type" aria-describedby="typeHelp" placeholder="Sport">
							<small id="typeHelp" class="form-text text-muted">* Add the sub-types or sub-category of news like 'Sports', 'Economy' etc.</small>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
@endsection