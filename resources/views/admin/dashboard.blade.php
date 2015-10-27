@extends('app-admin')

@section('scripts')
	{!! HTML::script( asset('assets/template/js/admin-header.main.js') ) !!}
@endsection

@section('content')
	<div id="navbar" class="navbar navbar-default navbar-fixed-top">
		<script type="text/javascript">
			try{ace.settings.check('navbar' , 'fixed')}catch(e){}
		</script>
		@include('header')
	</div>

	<div class="main-container" id="main-container">
		<script type="text/javascript">
			try{ace.settings.check('main-container' , 'fixed')}catch(e){}
		</script>
		@include('header-menu')
	</div>
		
@endsection