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

	<body class="{{$bodyClass}}">
		@yield('content')

		{!! HTML::script( asset('assets/template/js/jquery.js') ) !!}
		{!! HTML::script( asset('assets/template/js/bootstrap.js') ) !!}
		{!! HTML::script( asset('assets/template/js/admin-ace-theme.js') ) !!}
		{!! HTML::script( asset('assets/template/js/jquery-ui.custom.js') ) !!}
		{!! HTML::script( asset('assets/template/js/ace.js') ) !!}
		{!! HTML::script( asset('assets/template/js/delete.main.js') ) !!}
		{!! HTML::script( asset('assets/template/js/drop.main.js') ) !!}

		@yield('scripts')
	</body>
</html>