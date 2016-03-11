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
                <li class="active">sdadas dsad sadasd</li>
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
                    <div class="col-sm-4 result-category">
                        <h2>{{$type}}</h2>
                        <small class="shop-bg-red badge-results">45 Results</small>
                    </div>
                    <div class="col-sm-8">
                        <ul class="list-inline clear-both">
                            <li class="sort-list-btn">
                                <h3>Sort By :</h3>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        Popularity <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">All</a></li>
                                        <li><a href="#">Best Sales</a></li>
                                        <li><a href="#">Top Last Week Sales</a></li>
                                        <li><a href="#">New Arrived</a></li>
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
                                <a href="#"><img class="full-width img-responsive" src="/assets/img/blog/16.jpg" alt=""></a>
                                <a class="product-review" href="shop-ui-inner.html">Արագ Անցում</a>
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>զամբյուղ</a>
                            </div> 
                            <div class="product-description product-description-brd margin-bottom-30">
                                <div class="overflow-h margin-bottom-5">
                                    <div class="pull-left">
                                        <h4 class="title-price"><a href="shop-ui-inner.html">Տեսակ</a></h4>
                                        <span class="gender">անուն</span>
                                    </div>    
                                    <div class="product-price">
                                        <span class="title-price">$60.00</span>
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