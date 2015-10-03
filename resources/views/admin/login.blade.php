@extends('app-admin')

@section('scripts')

@endsection

@section('content')
	<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<img src = "{!! url('/assets/premium-on-line/logo.png') !!}" width='90px'>
								</h1>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-key green"></i>
												{{trans('common.login_form_header')}}
											</h4>
											@if(Session::has('error'))
												<div class="alert alert-danger">
													{{Session::get('error')}}
												</div>
											@endif
											<div class="space-6"></div>
											@include('admin.forms.admin-login-form')
											<!-- <div class="social-or-login center">
												<span class="bigger-110">{{trans('common.login_using')}}</span>
											</div> -->
											<div class="space-6"></div>
										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->
							</div><!-- /.position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div>
@endsection