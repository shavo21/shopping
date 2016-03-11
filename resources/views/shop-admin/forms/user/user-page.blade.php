{!! Form::open(['action' => ['ShopController@postEditBalance',$user->id], 'class' => 'form-horizontal', 'role' => 'form', 'files' => 'true' ]) !!}
	<div class="form-group">
		{!! Form::label('balance', trans('common.balance'), ['class' => 'col-sm-3 control-label no-padding-right']) !!}
		<div class="col-sm-9">
			<b class='red' style='font-size:14px;padding-left:0.5%;'>*</b>
			{!! Form::text('balance', null, ['id' => 'balance', 'class' => 'col-xs-10 col-sm-5', 'placeholder' => trans('common.balance')]) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('percent', trans('common.percent'), ['class' => 'col-sm-3 control-label no-padding-right']) !!}
		<div class="col-sm-9">
			<b class='red' style='font-size:14px;padding-left:0.5%;'>*</b>
			{!! Form::select('percent',['1'=>'1%','2'=>'2%','3'=>'3%'], null, ['id' => 'percent', 'class' => 'col-xs-10 col-sm-5']) !!}
		</div>
	</div>
	<div class="col-md-offset-3 col-md-9">
		<button id='add_user' class="btn btn-info" type="submit">
			<i class="ace-icon fa fa-check bigger-110"></i>
			{!! trans('common.save') !!}
		</button>
	</div>
{!! Form::close() !!}