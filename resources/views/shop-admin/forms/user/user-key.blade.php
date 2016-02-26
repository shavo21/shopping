{!! Form::open(['action' => ['ShopController@postUser'], 'class' => 'form-horizontal', 'role' => 'form', 'files' => 'true' ]) !!}
	<div class="form-group">
		<h1>
			{{trans('common.search_user')}}
		</h1>
	</div>
	<div class="form-group">
		{!! Form::label('user_key', trans('common.user_key'), ['class' => 'col-sm-3 control-label no-padding-right']) !!}
		<div class="col-sm-9">
			<b class='red' style='font-size:14px;padding-left:0.5%;'>*</b>
			{!! Form::text('user_key', null, ['id' => 'user_key', 'class' => 'col-xs-10 col-sm-5', 'placeholder' => trans('common.user_key')]) !!}
		</div>
	</div>
	<div class="col-md-offset-3 col-md-9">
		<button id='add_user' class="btn btn-info" type="submit">
			<i class="ace-icon fa fa-check bigger-110"></i>
			{!! trans('common.search') !!}
		</button>
	</div>
{!! Form::close() !!}