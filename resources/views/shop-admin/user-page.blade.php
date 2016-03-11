@extends('app-admin')

@section('scripts')
	{!! HTML::script( asset('assets/template/js/admin-header.main.js') ) !!}
@endsection

@section('content')
	<div id="navbar" class="navbar navbar-default navbar-fixed-top">
		<script type="text/javascript">
			try{ace.settings.check('navbar' , 'fixed')}catch(e){}
		</script>
		@include('shop-header')
	</div>

	<div class="main-container" id="main-container">
		<script type="text/javascript">
			try{ace.settings.check('main-container' , 'fixed')}catch(e){}
		</script>
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
							<div class="form-group">
								<h1>
									{{trans('common.user_page')}}
								</h1>
							</div>
							<div>
								<div class="row">
									<div class="col-md-3"></div>
									<div class="col-md-9">
										<div id="user-profile-1" class="user-profile row">
											<div class="col-md-5 center">
												<div>
													<!-- #section:pages/profile.picture -->
													<span class="profile-picture">
														<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="/uploads/images/{{$user->profile_picture}}" />
													</span>

													<!-- /section:pages/profile.picture -->
													<div class="space-4"></div>

													<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
														<div class="inline position-relative">
															<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
																<i class="ace-icon fa fa-circle light-green"></i>
																&nbsp;
																<span class="white">{{$user->first_name.' '.$user->last_name}}</span>
															</a>
														</div>
													</div>
												</div>
												<div class="hr dotted"></div>
												<div class="profile-contact-info">
													<div class="profile-contact-links align-left">
														<a href="#" class="btn btn-link">
															<i class="ace-icon fa fa-phone bigger-120 green"></i>
															{{$user->mobile_phonenumber}}
														</a>

														<a href="#" class="btn btn-link">
															<i class="ace-icon fa fa-envelope bigger-120 pink"></i>
															{{$user->email}}
														</a>

														<a href="#" class="btn btn-link">
															<i class="ace-icon fa fa-globe bigger-125 blue"></i>
															{{$user->address}}
														</a>

														<a href="#" class="btn btn-link">
															<i class="ace-icon fa fa-usd bigger-125 red"></i>
															{{$user->balance}}
														</a>
													</div>

													<div class="space-6"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							@include('shop-admin.forms.user.user-page')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
@endsection