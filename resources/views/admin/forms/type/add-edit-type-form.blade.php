@if($action == 'add')
{!! Form::open(['action' => ['ProductController@postAddType'], 'class' => 'form-horizontal', 'role' => 'form', 'files' => 'true' ]) !!}
@else
{!! Form::model($type, ['action' => ['ProductController@putEditType',  $id], 'method' => 'PUT', 'class' => 'form-horizontal', 'role' => 'form', 'files' => 'true' ]) !!}
@endif
	<div class="form-group">
		{!! Form::label('name', trans('common.name'), ['class' => 'col-sm-3 control-label no-padding-right']) !!}
		<div class="col-sm-9">
			<b class='red' style='font-size:14px;padding-left:0.5%;'>*</b>
			{!! Form::text('name', null, ['id' => 'name', 'class' => 'col-xs-10 col-sm-5', 'placeholder' => trans('common.name')]) !!}
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