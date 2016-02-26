@extends('app-admin')


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

		<div class="main-content">
			<div class="main-content-inner">
				<div class="page-content">
					<div class="row">
						<div class="col-xs-12">
							<div class='col-md-12'>
								<div class="col-sm-9">
								@include('message')
								</div>
							</div>
							@include('admin.forms.product.add-edit-product-form')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection