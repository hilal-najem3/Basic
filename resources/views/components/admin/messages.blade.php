@if(session()->has('message'))
<div class="alert alert-success">
	<p>{{ session()->get('message') }}</p>
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif