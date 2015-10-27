<div class="navbar-container" id="navbar-container">
	<button type="button" class="navbar-toggle menu-toggler pull-left fixed" id="menu-toggler" data-target="#sidebar">
		<span class="sr-only">Toggle sidebar</span>

		<span class="icon-bar"></span>

		<span class="icon-bar"></span>

		<span class="icon-bar"></span>
	</button>

	<div class="navbar-header pull-left">
		@if(isset($role))
			@if($role == 'admin')
			<a href="{{ action('AdminController@getDashboard') }}" class="navbar-brand">	
				<small>
					<img src = "{!! url('/assets/images/logo.png') !!}" height='25px'>
				</small>
			</a>
			@else
			<a href="{{ action('WebsitesAdminController@getDashboard', [$slug]) }}" class="navbar-brand">
				<small>
					<img src="{!! url('/assets/logos') !!}{!!'/'.$logo !!}" alt="Logo" height='30px' >
				</small>
			</a>
			@endif
		@else
			<small>
				<img src = "{!! url('/assets/premium-on-line/logo.png') !!}" height='25px'>
			</small>
		@endif	

	</div>

	<div class="navbar-buttons navbar-header pull-right" role="navigation">
		<ul class="nav ace-nav">
			<li class="light-blue">
				<a data-toggle="dropdown" href="#" class="dropdown-toggle">
					<!-- <img class="nav-user-photo" src="dist/avatars/user.jpg" alt="Jason's Photo"> -->
					<span class="user-info">
						<small>{{trans('common.welcome')}},</small>
						@if(isset($authUser))
							{{ $authUser->first_name }}
						@endif
					</span>

					<i class="ace-icon fa fa-caret-down"></i>
				</a>

				<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
					<li class="divider"></li>

					<li>
						<a href="{{ action('AdminController@getLogout') }}">
							<i class="ace-icon fa fa-power-off"></i>
							{{trans('common.logout')}}
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</div><!-- /.navbar-container -->