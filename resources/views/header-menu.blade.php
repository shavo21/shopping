<div id="sidebar" class="sidebar      h-sidebar                navbar-collapse collapse">
	<script type="text/javascript">
		try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
	</script>
	<ul class="nav nav-list">
		@if(isset($user))
		<li class="active open hover">
		@else
		<li class="hover">
		@endif
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-users"></i>
				<span class="menu-text">
					{{trans('common.users')}}
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">

				<li class="hover">
					<a href="{{action('AdminController@getUsers')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						{{trans('common.all_users')}}
					</a>

					<b class="arrow"></b>
				</li>

				<li class="hover">
					<a href="{{action('AdminController@getAddUser')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						{{trans('common.add_user')}}
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>
		@if(isset($product))
		<li class="hover active open">
		@else
		<li class="hover">
		@endif
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-suitcase"></i>
				<span class="menu-text"> {{trans('common.products')}} </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="hover">
					<a href="{{action('ProductController@getTypes')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						{{trans('common.types')}}
					</a>

					<b class="arrow"></b>
				</li>

				<li class="hover">
					<a href="{{action('ProductController@getAddType')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						{{trans('common.add_type')}}
					</a>

					<b class="arrow"></b>
				</li>

				<li class="hover">
					<a href="{{action('ProductController@getProducts')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						{{trans('common.all_products')}}
					</a>

					<b class="arrow"></b>
				</li>

				<li class="hover">
					<a href="{{action('ProductController@getAddProduct')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						{{trans('common.add_product')}}
					</a>

					<b class="arrow"></b>
				</li>

			</ul>
		</li>

	</ul><!-- /.nav-list -->

	<!-- #section:basics/sidebar.layout.minimize -->

	<!-- /section:basics/sidebar.layout.minimize -->
	<script type="text/javascript">
		try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
	</script>
</div>