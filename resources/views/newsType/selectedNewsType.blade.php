@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">{{__('Delete Types') }} <span class="badge badge-info float-right">{{$cat->type}}</span></div>
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
									<td>{{ $i++ }}</td>
									<td>
										{{$type->type}}
									</td>
									<td>
										<form action="/types/{{ $type->id }}" method="POST">
											@csrf
											@method('DELETE')
											<div class="btn-group">
												<button class="btn btn-dark">Delete</button>
											</div>
										</form>
									</td>
									
								</tr>
								@endforeach
								@else
								<tr>
									<td colspan="2">No data</td>
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