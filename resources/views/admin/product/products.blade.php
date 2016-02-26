@extends('app-admin')


@section('content')
	<div id="navbar" class="navbar navbar-default navbar-fixed-top">
		<script type="text/javascript">
			try{ace.settings.check('navbar' , 'fixed')}catch(e){}
		</script>
		@include('header')
	</div>

	<div class="main-container" id="main-container">
		<script type="text/javascript">
			try{ace.settings.check('main-container' , 'fixed')}catch(e){}
		</script>
		@include('header-menu')
		<!-- PAGE CONTENT BEGINS -->
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
									trans('common.products_table')
								</h1>
							</div>
							<table id="simple-table" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>{{trans('common.name')}}</th>
										<th>{{trans('common.count')}}</th>
										<th>{{trans('common.price')}}</th>
										<th>{{trans('common.type')}}</th>
										<th>{{trans('common.product_pictures')}}</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									@foreach($products as $product)
										<tr>
											<td>{{ $product->name }}</td>
											<td>{{ $product->count }}</td>
											<td>{{ $product->price }}</td>
											<td>{{ $product->type->name }}</td>
											<td>
												<img src="{!! asset('/uploads/images/products')!!}{{ '/'.$product->product_picture1 }}" width='50px'>
												@if($product->product_picture2 != '')
												<img src="{!! asset('/uploads/images/products')!!}{{ '/'.$product->product_picture2 }}" width='50px'>
												@endif
												@if($product->product_picture3)
												<img src="{!! asset('/uploads/images/products')!!}{{ '/'.$product->product_picture3 }}" width='50px'>
												@endif
											</td>
											<td>
												<div class="hidden-sm hidden-xs btn-group">
													<a class="btn btn-xs btn-info" href="{{ action('ProductController@getEditProduct',  $product->id) }}">
														<i class="ace-icon fa fa-pencil bigger-120" data-toggle="tooltip" data-placement="left" title="{{trans('tooltip.edit_product')}}"></i>
													</a>

													<a class="btn btn-xs btn-danger delete" data-toggle="modal" data-target="#myModalDelete" href='#' data-href="{{ action('ProductController@getRemoveProduct',  $product->id) }}">
														<i class="ace-icon fa fa-trash-o bigger-120" data-toggle="tooltip" data-placement="left" title="{{trans('tooltip.delete_product')}}"></i>
													</a>
												</div>
											</td>
										</tr>
									@endforeach 
								</tbody>
							</table>
							{!! $products->render() !!}
						</div><!-- /.span -->

					</div><!-- /.row -->
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id='myModalDelete' tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content col-md-12">
				<h2 id = 'modal_h1'>{{trans('common.delete_status')}}
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</h2>
				<a class='delete_one' style='float:left;padding:15px 20px;' href='#'><button class="pull-right btn btn-sm btn-danger">{{trans('common.delete')}}</button></a>
				<a class='delete_one' style='float:right;padding:15px 20px;' href='#'><button class="pull-right btn btn-sm btn" data-dismiss="modal" aria-label="Close">{{trans('common.cancel')}}</button></a>
			</div>
		</div>
	</div>
		
@endsection