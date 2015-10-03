{!! Form::open(array('action' => 'AdminController@postLogin', 'id' => 'admin_login_form')) !!}
	<fieldset>
		<label class="block clearfix">
			<span class="block input-icon input-icon-right">
				{!! Form::text('login', null, ['placeholder' => trans('common.username'), 'class' => 'form-control']) !!}
				<i class="ace-icon fa fa-user"></i>
			</span>
		</label>

		<label class="block clearfix">
			<span class="block input-icon input-icon-right">
				{!! Form::password('password', ['placeholder' => trans('common.password'), 'class' => 'form-control']) !!}
				<i class="ace-icon fa fa-lock"></i>
			</span>
		</label>

		<div class="space"></div>

		<div class="clearfix">
			<label class="inline">
				{!! Form::checkbox('remember_me', 1, false, ['class' => 'ace']) !!}
				<span class="lbl">{{ trans('common.rember') }}</span>
			</label>

			<button type="submit" class="width-36 pull-right btn btn-sm btn-primary" id="admin_login_button">
				<i class="ace-icon fa fa-key"></i>
				<span class="bigger-110">{{ trans('common.login') }}</span>
			</button>
		</div>

		<div class="space-4"></div>
	</fieldset>
{!! Form::close() !!}