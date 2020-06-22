@if(count($errors) > 0)
@foreach($errors->all() as $error)
<div class="alert alert-danger alert-with-icon alert-dismissible fade show"
	data-notify="container">
	<button type="button" aria-hidden="true" class="close" data-dismiss="alert"
	aria-label="Close">
	<i class="nc-icon nc-simple-remove"></i>
	</button>
	<span data-notify="icon" class="nc-icon nc-bell-55"></span>
	<span data-notify="message">{{$error}}</span>
</div>
@endforeach
@endif
@if(session('success'))
<div class="alert alert-success alert-with-icon alert-dismissible fade show"
	data-notify="container">
	<button type="button" aria-hidden="true" class="close" data-dismiss="alert"
	aria-label="Close">
	<i class="nc-icon nc-simple-remove"></i>
	</button>
	<span data-notify="icon" class="nc-icon nc-bell-55"></span>
	<span data-notify="message">{{session('success')}}</span>
</div>
@endif
@if(session('error'))
<div class="alert alert-danger alert-with-icon alert-dismissible fade show"
	data-notify="container">
	<button type="button" aria-hidden="true" class="close" data-dismiss="alert"
	aria-label="Close">
	<i class="nc-icon nc-simple-remove"></i>
	</button>
	<span data-notify="icon" class="nc-icon nc-bell-55"></span>
	<span data-notify="message">{{session('error')}}</span>
</div>
@endif