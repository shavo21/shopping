<div class='col-md-12'>
	<div class="col-sm-9">
	@if ($errors->has())
		<div class="alert alert-danger">
	        @foreach ($errors->all() as $error)
	            {{ $error }}<BR>       
	        @endforeach
	    </div>
	@endif
	</div>
</div>
@if(Session::has('error'))
	<div class="alert alert-success">
		{{Session::get('error')}}
	</div>
@endif