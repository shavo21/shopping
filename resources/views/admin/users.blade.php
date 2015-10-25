@extends('app-admin')


@section('content')
<div id="navbar" class="navbar navbar-default navbar-fixed-top">
	<script type="text/javascript">
		try{ace.settings.check('navbar' , 'fixed')}catch(e){}
	</script>
	@include('header')
</div>
			<!-- /section:basics/navbar.layout -->
<div class="main-container" id="main-container">
	<script type="text/javascript">
		try{ace.settings.check('main-container' , 'fixed')}catch(e){}
	</script>
	@include('header-menu')

	<!-- #section:basics/sidebar.horizontal -->
	
</div><!-- /.main-container -->
		
@endsection