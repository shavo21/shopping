@if($action == 'add')
{!! Form::open(['action' => ['AdminController@postAddUser'], 'class' => 'form-horizontal', 'role' => 'form', 'files' => 'true' ]) !!}
@else
{!! Form::model($user, ['action' => ['AdminController@putEditUser',  $id], 'method' => 'PUT', 'class' => 'form-horizontal', 'role' => 'form', 'files' => 'true' ]) !!}
@endif
	<div class="form-group">
		{!! Form::label('first_name', trans('common.first_name'), ['class' => 'col-sm-3 control-label no-padding-right']) !!}
		<div class="col-sm-9">
			<b class='red' style='font-size:14px;padding-left:0.5%;'>*</b>
			{!! Form::text('first_name', null, ['id' => 'first_name', 'class' => 'col-xs-10 col-sm-5', 'placeholder' => trans('common.first_name')]) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('last_name', trans('common.last_name'), ['class' => 'col-sm-3 control-label no-padding-right']) !!}
		<div class="col-sm-9">
			<b class='red' style='font-size:14px;padding-left:0.5%;'>*</b>
			{!! Form::text('last_name', null, ['id' => 'last_name', 'class' => 'col-xs-10 col-sm-5', 'placeholder' => trans('common.last_name')]) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('login', trans('common.login'), ['class' => 'col-sm-3 control-label no-padding-right']) !!}
		<div class="col-sm-9">
			{!! Form::text('login', null, ['id' => 'login', 'class' => 'col-xs-10 col-sm-5', 'placeholder' => trans('common.login')]) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('email', trans('common.email'), ['class' => 'col-sm-3 control-label no-padding-right']) !!}
		<div class="col-sm-9">
			{!! Form::text('email', null, ['id' => 'login', 'class' => 'col-xs-10 col-sm-5', 'placeholder' => trans('common.email')]) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('password', trans('common.password'), ['class' => 'col-sm-3 control-label no-padding-right']) !!}
		<div class="col-sm-9">
			@if($action == 'add')
			<b class='red' style='font-size:14px;padding-left:0.5%;'>*</b>
			@endif
			{!! Form::password('password', ['id' => 'password', 'class' => 'col-xs-10 col-sm-5', 'placeholder' => trans('common.password')]) !!}
		</div>
	</div>
	@if($action == 'add')
	<div class="form-group">
		{!! Form::label('password_confirmation', trans('common.password_confirmation'), ['class' => 'col-sm-3 control-label no-padding-right']) !!}
		<div class="col-sm-9">
			<b class='red' style='font-size:14px;padding-left:0.5%;'>*</b>
			{!! Form::password('password_confirmation', ['id' => 'password_confirmation', 'class' => 'col-xs-10 col-sm-5', 'placeholder' => trans('common.password_confirmation')]) !!}
		</div>
	</div>
	@endif
	<div class="form-group">
		{!! Form::label('title', trans('common.title'), ['class' => 'col-sm-3 control-label no-padding-right']) !!}
		<div class="col-sm-9">
			<b class='red' style='font-size:14px;padding-left:0.5%;'>*</b>
			{!! Form::select('title', [ 'mr' => trans('common.mr'), 'mrs' => trans('common.mrs'), 'miss' => trans('common.miss') ], null, ['id' => 'title', 'class' => 'col-xs-10 col-sm-5']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('address', trans('common.address'), ['class' => 'col-sm-3 control-label no-padding-right']) !!}
		<div class="col-sm-9">
			{!! Form::text('address', null, ['id' => 'address', 'class' => 'col-xs-10 col-sm-5', 'placeholder' => trans('common.address')]) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('mobile_phonenumber', trans('common.mobile_phonenumber'), ['class' => 'col-sm-3 control-label no-padding-right']) !!}
		<div class="col-sm-9">
			{!! Form::text('mobile_phonenumber', null, ['id' => 'mobile_phonenumber', 'class' => 'col-xs-10 col-sm-5', 'placeholder' => trans('common.mobile_phonenumber')]) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('profile_picture', 'profile_picture', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
		<div class="col-sm-9">
			<b class='red' style='font-size:14px;padding-left:0.5%;'>*</b>
			<div class="col-sm-4">
				<div class="widget-box">
					<div class="widget-header">
						<h4 class="widget-title">{{ trans('common.profile_picture') }}</h4>
					</div>
					<div class="widget-body">
						<div class="widget-main">
							<div class="form-group">
								<div class="col-xs-12" id="fileUploadBox">
									<label class="ace-file-input ace-file-multiple">
										{!! Form::file('profile_picture', array('id' => 'id-input-file-3')) !!}
										<span class="ace-file-container hide-placeholder selected">
										</span>
									</label>
									<!-- /section:custom/file-input -->
								</div>
							</div>
							<!-- /section:custom/file-input.filter -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="form-group">
		{!! Form::label('role', trans('common.role'), ['class' => 'col-sm-3 control-label no-padding-right']) !!}
		<div class="col-sm-9">
			{!! Form::select('role', [ 'user' => 'User', 'shop_admin' => 'Admin' ], null, ['id' => 'role', 'class' => 'col-xs-10 col-sm-5']) !!}
		</div>
	</div>

	<div class="clearfix form-actions">
		<div class="col-md-offset-3 col-md-9">
			<button id='add_user' class="btn btn-info" type="submit">
				<i class="ace-icon fa fa-check bigger-110"></i>
				@if($action == 'add')
				{!! trans('common.save') !!}
				@else
				{!! trans('common.edit') !!}
				@endif
			</button>
		</div>
	</div>
{!! Form::close() !!}