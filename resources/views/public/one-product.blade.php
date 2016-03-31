@extends('app-public')

@section('scripts')   
    <link rel="stylesheet" href="/assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
    <link rel="stylesheet" href="/assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
    <link rel="stylesheet" href="/assets/plugins/master-slider/quick-start/masterslider/style/masterslider.css">
    <link rel='stylesheet' href="/assets/plugins/master-slider/quick-start/masterslider/skins/default/style.css">

    <!-- Master Slider -->
    <script src="/assets/plugins/master-slider/quick-start/masterslider/masterslider.min.js"></script>
    <script src="/assets/plugins/master-slider/quick-start/masterslider/jquery.easing.min.js"></script>
    <!-- JS Page Level -->
    <script src="/assets/js/plugins/master-slider.js"></script>
    <script src="/assets/js/forms/product-quantity.js"></script>
    <script>
        jQuery(document).ready(function() {
            MasterSliderShowcase2.initMasterSliderShowcase2();
        });
    </script>
@endsection

@section('content')
    @include('header-menu-public')

    <!--=== Shop Product ===-->
    <div class="shop-product">
        <!-- Breadcrumbs v5 -->
        <div class="container">
            <ul class="breadcrumb-v5">
                <li><a href="{{action('UsersController@getDashboard')}}"><i class="fa fa-home"></i></a></li>
                <li><a href="{{action('UsersController@getProducts',$product->type->id)}}">{{$product->type->name}}</a></li>
                <li class="active">{{$product->name}}</li>
            </ul> 
        </div>
        <!-- End Breadcrumbs v5 -->

        <div class="container">
            <div class="row">
                <div class="col-md-6 md-margin-bottom-50">
                    <div class="ms-showcase2-template">
                        <!-- Master Slider -->
                        <div class="master-slider ms-skin-default" id="masterslider">
                            <div class="ms-slide">
                                <img class="ms-brd" src="/uploads/images/products/{{$product->product_picture1}}" data-src="/uploads/images/products/{{$product->product_picture1}}" alt="lorem ipsum dolor sit">
                                <img class="ms-thumb" src="/uploads/images/products/{{$product->product_picture1}}" alt="thumb">
                            </div>
                            @if($product->product_picture2 != '')
                            <div class="ms-slide">
                                <img src="/uploads/images/products/{{$product->product_picture2}}" data-src="/uploads/images/products/{{$product->product_picture2}}" alt="lorem ipsum dolor sit">
                                <img class="ms-thumb" src="/uploads/images/products/{{$product->product_picture2}}" alt="thumb">
                            </div>
                            @endif
                            @if($product->product_picture3 != '')
                            <div class="ms-slide">
                                <img src="/uploads/images/products/{{$product->product_picture3}}" data-src="/uploads/images/products/{{$product->product_picture3}}" alt="lorem ipsum dolor sit">
                                <img class="ms-thumb" src="/uploads/images/products/{{$product->product_picture3}}" alt="thumb">
                            </div>
                            @endif
                        </div>
                        <!-- End Master Slider -->
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="shop-product-heading">
                        <h2>մեր սոցիալական էջերը</h2>
                        <ul class="list-inline shop-product-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div><!--/end shop product social-->

                    <p>կարող եք մեզ հետ կապ հաստատել նաև մեր սոցիալական կայքեր միջոցով, ինչպես նաև այցելել մեր ֆիրմային <strong><a href="#">խանութներ</a></strong>:</p><br>

                    <ul class="list-inline shop-product-prices margin-bottom-30">
                        <li class="shop-red">${{$product->price}}</li>
                        <li class="line-through">${{$product->price}}</li>
                        <li><small class="shop-bg-red time-day-left">4 days left</small></li>
                    </ul><!--/end shop product prices-->
                    <div class="margin-bottom-40">
                        <button type="button" class="btn-u btn-u-sea-shop btn-u-lg basket" data-id="{{$product->id}}">զամբյուղ</button>
                    </div><!--/end product quantity-->     
                    <p class="wishlist-category"><strong>Տեսակ:</strong> <a href="{{action('UsersController@getProducts',$product->type->id)}}">{{$product->type->name}}</a></p>
                </div>
            </div><!--/end row-->
        </div>    
    </div>
    <!--=== End Shop Product ===-->

    <!--=== Shop Suvbscribe ===-->
    <div class="shop-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-8 md-margin-bottom-20">
                    <h2>Բաժանորդագրվեք մեր էլեկտրոնային տեղեկագիր</h2>
                </div>  
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Էլ. փոստ">
                        <span class="input-group-btn">
                            <button class="btn" type="button"><i class="fa fa-envelope-o"></i></button>
                        </span>
                    </div>    
                </div>
            </div>
        </div><!--/end container-->
    </div>
    <!--=== End Shop Suvbscribe ===-->

    @include('footer')
@endsection