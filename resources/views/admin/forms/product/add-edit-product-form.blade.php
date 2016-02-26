@if($action == 'add')
{!! Form::open(['action' => ['ProductController@postAddProduct'], 'class' => 'form-horizontal', 'role' => 'form', 'files' => 'true' ]) !!}
@else
{!! Form::model($productData, ['action' => ['ProductController@putEditProduct',  $id], 'method' => 'PUT', 'class' => 'form-horizontal', 'role' => 'form', 'files' => 'true' ]) !!}
@endif
	<div class="form-group">
		<h1>
			@if($action == 'add')
			trans('common.create_product')
			@else
			trans('common.edit_product')
			@endif
		</h1>
	</div>
	<div class="form-group">
		{!! Form::label('name', trans('common.name'), ['class' => 'col-sm-3 control-label no-padding-right']) !!}
		<div class="col-sm-9">
			<b class='red' style='font-size:14px;padding-left:0.5%;'>*</b>
			{!! Form::text('name', null, ['id' => 'name', 'class' => 'col-xs-10 col-sm-5', 'placeholder' => trans('common.name')]) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('count', trans('common.count'), ['class' => 'col-sm-3 control-label no-padding-right']) !!}
		<div class="col-sm-9">
			<b class='red' style='font-size:14px;padding-left:0.5%;'>*</b>
			{!! Form::text('count', null, ['id' => 'count', 'class' => 'col-xs-10 col-sm-5', 'placeholder' => trans('common.count')]) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('price', trans('common.price'), ['class' => 'col-sm-3 control-label no-padding-right']) !!}
		<div class="col-sm-9">
			<b class='red' style='font-size:14px;padding-left:0.5%;'>*</b>
			{!! Form::text('price', null, ['id' => 'price', 'class' => 'col-xs-10 col-sm-5', 'placeholder' => trans('common.price')]) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('type', trans('common.type'), ['class' => 'col-sm-3 control-label no-padding-right']) !!}
		<div class="col-sm-9">
			<b class='red' style='font-size:14px;padding-left:0.5%;'>*</b>
			{!! Form::select('type_id', $types,null, ['id' => 'type', 'class' => 'col-xs-10 col-sm-5']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('product_picture1', trans('common.product_picture1'), ['class' => 'col-sm-3 control-label no-padding-right']) !!}
		<div class="col-sm-9">
			@if($action == 'add')
			<b class='red' style='font-size:14px;padding-left:0.5%;'>*</b>
			@endif
			<div class="col-sm-4">
				<div class="widget-box">
					<div class="widget-header">
						<h4 class="widget-title">{{ trans('common.product_picture1') }}</h4>
					</div>
					<div class="widget-body">
						<div class="widget-main">
							<div class="form-group">
								<div class="col-xs-12" id="fileUploadBox">
									<label class="ace-file-input ace-file-multiple">
										{!! Form::file('product_picture1', array('id' => 'id-input-file-3')) !!}
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
		{!! Form::label('product_picture2', trans('common.product_picture2'), ['class' => 'col-sm-3 control-label no-padding-right']) !!}
		<div class="col-sm-9">
			<div class="col-sm-4">
				<div class="widget-box">
					<div class="widget-header">
						<h4 class="widget-title">{{ trans('common.product_picture2') }}</h4>
					</div>
					<div class="widget-body">
						<div class="widget-main">
							<div class="form-group">
								<div class="col-xs-12" id="fileUploadBox">
									<label class="ace-file-input ace-file-multiple">
										{!! Form::file('product_picture2', array('id' => 'id-input-file-4')) !!}
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
		{!! Form::label('product_picture3', trans('common.product_picture3'), ['class' => 'col-sm-3 control-label no-padding-right']) !!}
		<div class="col-sm-9">
			<div class="col-sm-4">
				<div class="widget-box">
					<div class="widget-header">
						<h4 class="widget-title">{{ trans('common.product_picture3') }}</h4>
					</div>
					<div class="widget-body">
						<div class="widget-main">
							<div class="form-group">
								<div class="col-xs-12" id="fileUploadBox">
									<label class="ace-file-input ace-file-multiple">
										{!! Form::file('product_picture3', array('id' => 'id-input-file-5')) !!}
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
{!! Form::close() !!}