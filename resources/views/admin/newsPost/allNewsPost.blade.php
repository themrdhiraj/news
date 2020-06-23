@extends('layouts.app', [
    'title' => 'All News'
])
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">{{__('All News')}}</div>
				<div class="card-body">
					<div class="responsive">
						@if (count($posts))
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Title</th>
									<th scope="col">Image</th>
									<th scope="col">Status</th>
									<th scope="col">Author</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								@php
								$i = 1;
								@endphp
								@foreach ($posts as $post)
								<tr>
									<td>{{ $i++ }}.</td>
									<td>{{$post->newsTitle}}</td>
									<td><img src="/storage/newsImages/{{$post->newsImage}}" height="50" alt="{{$post->newsImage}}"></td>
									<td>
										@if ($post->newsStatus == 0)
										<i class="badge badge-warning">Save to draft</i>
										@elseif($post->newsStatus == 1)
										<i class="badge badge-primary">Published</i>
										@else
										<i class="badge badge-danger">Somethings wrong</i>
										@endif
									</td>
									<td>{{$post->name}}</td>
									<td>
										<form action="/posts/{{ $post->id }}" method="POST">
											@csrf
											@method('DELETE')
											<div class="btn-group">
												<a href="/posts/{{ $post->id }}/edit
												" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
												<button class="btn btn-dark" onclick="confirm('Are you sure?')">Delete <i class="fa fa-trash"></i></button>
											</div>
										</form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						@else
						<tr>
							<td colspan="4">No News added yet.<a href="/posts/create" class="btn btn-primary float-right">Add News?</a></td>
						</tr>
						@endif
					</div>
					{{ $posts->links() }}
				</div>
			</div>
		</div>
	</div>
</div>
<script>
@endsection