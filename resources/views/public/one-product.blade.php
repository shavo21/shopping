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
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="#">Products</a></li>
                <li class="active">New</li>
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
                                <img class="ms-brd" src="/assets/img/blank.gif" data-src="/assets/img/blog/28.jpg" alt="lorem ipsum dolor sit">
                                <img class="ms-thumb" src="/assets/img/blog/28-thumb.jpg" alt="thumb">
                            </div>
                            <div class="ms-slide">
                                <img src="/assets/img/blank.gif" data-src="/assets/img/blog/29.jpg" alt="lorem ipsum dolor sit">
                                <img class="ms-thumb" src="/assets/img/blog/29-thumb.jpg" alt="thumb">
                            </div>
                            <div class="ms-slide">
                                <img src="/assets/img/blank.gif" data-src="/assets/img/blog/30.jpg" alt="lorem ipsum dolor sit">
                                <img class="ms-thumb" src="/assets/img/blog/30-thumb.jpg" alt="thumb">
                            </div>
                        </div>
                        <!-- End Master Slider -->
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="shop-product-heading">
                        <h2>Corinna Foley</h2>
                        <ul class="list-inline shop-product-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div><!--/end shop product social-->

                    <p>Integer <strong>dapibus ut elit</strong> non volutpat. Integer auctor purus a lectus suscipit fermentum. Vivamus lobortis nec erat consectetur elementum.</p><br>

                    <ul class="list-inline shop-product-prices margin-bottom-30">
                        <li class="shop-red">$57.00</li>
                        <li class="line-through">$70.00</li>
                        <li><small class="shop-bg-red time-day-left">4 days left</small></li>
                    </ul><!--/end shop product prices-->

                    <h3 class="shop-product-title">Quantity</h3>
                    <div class="margin-bottom-40">
                        <form name="f1" class="product-quantity sm-margin-bottom-20">
                            <button type='button' class="quantity-button" name='subtract' onclick='javascript: subtractQty();' value='-'>-</button>
                            <input type='text' class="quantity-field" name='qty' value="1" id='qty'/>
                            <button type='button' class="quantity-button" name='add' onclick='javascript: document.getElementById("qty").value++;' value='+'>+</button>
                        </form>
                        <button type="button" class="btn-u btn-u-sea-shop btn-u-lg">զամբյուղ</button>
                    </div><!--/end product quantity-->     
                    <p class="wishlist-category"><strong>Categories:</strong> <a href="#">Clothing,</a> <a href="#">Shoes</a></p>
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
                    <h2>subscribe to our weekly <strong>newsletter</strong></h2>
                </div>  
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Email your email...">
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