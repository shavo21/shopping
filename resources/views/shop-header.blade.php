<div class="navbar-container" id="navbar-container">
	<button type="button" class="navbar-toggle menu-toggler pull-left fixed" id="menu-toggler" data-target="#sidebar">
		<span class="sr-only">Toggle sidebar</span>

		<span class="icon-bar"></span>

		<span class="icon-bar"></span>

		<span class="icon-bar"></span>
	</button>

	<div class="navbar-header pull-left">
		<a href="{{ action('ShopController@getDashboard') }}" class="navbar-brand">	
			<small>
				<img src = "{!! url('/assets/images/logo.png') !!}" height='25px'>
			</small>
		</a>	

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
						<a href="{{ action('ShopController@getLogout') }}">
							<i class="ace-icon fa fa-power-off"></i>
							{{trans('common.logout')}}
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</div><!-- /.navbar-container -->