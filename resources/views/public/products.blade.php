@extends('app-public')

@section('scripts')
	<link rel="stylesheet" href="/assets/css/pages/log-reg-v3.css">
@endsection

@section('content')
    @include('header-menu-public')
    <!--=== Breadcrumbs v4 ===-->
    <div class="breadcrumbs-v4">
        <div class="container">
            <h1>ARM Shop <span class="shop-green">Խանութների</span> Ցանց</h1>
            <ul class="breadcrumb-v4-in">
                <li><a href="{{action('UsersController@getDashboard')}}">Գլխավոր</a></li>
                <li class="active">{{$type->name}}</li>
            </ul>
        </div><!--/end container-->
    </div> 
    <!--=== End Breadcrumbs v4 ===-->

    <!--=== Content Part ===-->
    <div class="content container">
        <div class="row">
            <div class="col-md-1 filter-by-block md-margin-bottom-60">

            </div>

            <div class="col-md-10">
                <div class="row margin-bottom-5">
                    <div class="col-sm-7 result-category">
                        <h2>{{$type->name}}</h2>
                    </div>
                    <div class="col-sm-5">
                        <ul class="list-inline clear-both">
                            <li class="sort-list-btn">
                                <h3>Խմբավորել :</h3>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        Տեսակնաեր <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">ԳՆԻ</a></li>
                                        <li><a href="#">ՏԵՍԱԿԻ</a></li>
                                        <li><a href="#">ԶԵՂՉԻ</a></li>
                                        <li><a href="#">ՊԱՀԱՆՋԱՐԿԻ</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>    
                </div><!--/end result category-->

                <div class="filter-results">
                    <div class="row illustration-v2 margin-bottom-30">
                        @foreach($products as $product)
                        <div class="col-md-4">
                            <div class="product-img product-img-brd">
                                <a href="{{action('UsersController@getProduct',[$product->type->id,$product->id])}}"><img class="full-width img-responsive" src="/uploads/images/products/{{$product->product_picture1}}" alt=""></a>
                                <a class="product-review" href="{{action('UsersController@getProduct',[$product->type->id,$product->id])}}">Արագ Անցում</a>
                                @if($product->count !=0)
                                <a class="add-to-cart basket" href="#" data-id="{{$product->id}}"><i class="fa fa-shopping-cart"></i>զամբյուղ</a>
                                @endif
                            </div> 
                            <div class="product-description product-description-brd margin-bottom-30">
                                <div class="overflow-h margin-bottom-5">
                                    <div class="pull-left">
                                        <h4 class="title-price"><a href="{{action('UsersController@getProduct',[$product->type->id,$product->id])}}">{{$product->name}}</a></h4>
                                        <span class="gender">{{$product->type->name}}</span>
                                    </div>    
                                    <div class="product-price">
                                        <span class="title-price">${{$product->price}}</span>
                                    </div>
                                </div>       
                            </div>
                        </div>
                        @endforeach
                        <!--  $products->render()  -->
                    </div>
                </div><!--/end filter resilts-->
            </div>
        </div><!--/end row-->
    </div><!--/end container-->    
    <!--=== End Content Part ===-->

    @include('footer')
@endsection