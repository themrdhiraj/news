@extends('layouts.app', [
    'title' => 'All Category'
])
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">{{__('All Category')}}
				<small class="form-text text-danger">* Deleting Category will also delete Sub-category. And atleast 3 category needed.</small></div>
				<div class="card-body">
					<div class="responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Category</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								@if (count($types) > 0)
								@php
								$i = 1;
								@endphp
								@foreach ($types as $type)
								<tr>
									<td>{{ $i++ }}.</td>
									<td>
										{{$type->type}}
										@foreach ($type->subType as $sub)
										<li>{{ $sub->type }}
										</li>
										@endforeach
									</td>
									<td>
										<form action="/types/{{ $type->id }}" method="POST">
											@csrf
											@method('DELETE')
											<div class="btn-group">
												<a href="/types/{{ $type->id }}" class="btn btn-primary">Expand</a>
												<button class="btn btn-dark" onclick="confirm('Are you sure?')">Delete</button>
											</div>
										</form>
									</td>
									
								</tr>
								@endforeach
								@else
								<tr>
									<td colspan="3">No data <a href="/types/create" class="btn btn-primary float-right">Add Category?</a></td>
								</tr>
								@endif
							</tbody>
						</table>
					</div>
					{{ $types->links() }}
				</div>
			</div>
		</div>
	</div>
</div>
<script>
@endsection