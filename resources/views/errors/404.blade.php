<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title></title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />


		{!! HTML::style( asset('assets/template/css/bootstrap.css') ) !!}
		{!! HTML::style( asset('assets/template/css/font-awesome.css') ) !!}
		{!! HTML::style( asset('assets/template/css/ace-fonts.css') ) !!}
		{!! HTML::style( asset('assets/template/css/ace.css') ) !!}
		{!! HTML::style( asset('assets/template/css/ace-rtl.css') ) !!}

		@yield('style')
	</head>

	<body class="skin-3 no-skin">
		<div class="row">
			<div class="col-md-12">
				<div class="error-container">
					<div class="well">
						<h1 class="grey lighter smaller">
							<span class="blue bigger-125">
								<i class="ace-icon fa fa-sitemap"></i>
								404
							</span>
							Page Not Found
						</h1>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>