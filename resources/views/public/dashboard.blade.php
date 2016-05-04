@extends('app-public')

@section('content')
    @include('header-menu-public')

    <!--=== Slider ===-->
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <!-- SLIDE -->
                @foreach($slideProducts as $key => $slideProduct)
                <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Տեսարան {{$key+1}}">
                    <!-- MAIN IMAGE -->
                    <img src="/uploads/images/products/{{$slideProduct->product_picture1}}"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                </li>
                <!-- END SLIDE -->
                @endforeach

            </ul>
            <div class="tp-bannertimer tp-bottom"></div>            
        </div>
    </div>
    <!--=== End Slider ===-->

    <!--=== Product Content ===-->
    <div class="container content-md">
        <!--=== Illustration v1 ===-->
        <div class="row margin-bottom-60">
            @foreach($newPriceProducts as $newPriceProduct)
            <div class="col-md-6">
                <div class="overflow-h">
                    <div class="illustration-v1 illustration-img1">
                        <div class="illustration-bg">
                            <div class="illustration-ads ad-details-v1" style="background-image:url('/uploads/images/products/{{$newPriceProduct->product_picture1}}')">
                                <h3>Նոր զեղչ 30% - 60%</h3>
                                <a class="btn-u btn-brd btn-brd-hover btn-u-light" href="{{action('UsersController@getProduct',[$newPriceProduct->type->id,$newPriceProduct->id])}}">Գնել Հիմա</a>
                            </div>    
                        </div>    
                    </div>
                </div>    
            </div>
            @endforeach
        </div><!--/end row-->
        <!--=== End Illustration v1 ===-->

        <div class="heading heading-v1 margin-bottom-20">
            <h2>Գլխավոր Ապրանքներ</h2>
            <p>Ձեզ ենք առաջարկում բոլոր տեսակի ապրանքների լայն տեսականի մատչելի գներով: Մեր բոլոր խանութներում գործում է զեղչերի ճկուն համակարգ: Կատարեք գնումներ մեր խանութներից և ստացեք բոնուս միավորներ:</p>
        </div>

        <!--=== Illustration v2 ===-->
        <div class="illustration-v2 margin-bottom-60">
            <div class="customNavigation margin-bottom-25">
                <a class="owl-btn prev rounded-x"><i class="fa fa-angle-left"></i></a>
                <a class="owl-btn next rounded-x"><i class="fa fa-angle-right"></i></a>
            </div>

            <ul class="list-inline owl-slider">
                @foreach($mainProducts as $mainProduct)
                <li class="item">
                    <div class="product-img">
                        <a href="{{action('UsersController@getProduct',[$mainProduct->type->id,$mainProduct->id])}}">
                            @if($mainProduct->product_picture2 != '')
                            <img class="full-width img-responsive" src="/uploads/images/products/{{$mainProduct->product_picture2}}" style="width:100%;height:397px">
                            @else
                            <img class="full-width img-responsive" src="/uploads/images/products/{{$mainProduct->product_picture1}}" style="width:100%;height:397px">
                            @endif
                        </a>
                        <a class="product-review" href="{{action('UsersController@getProduct',[$mainProduct->type->id,$mainProduct->id])}}">Արագ Անցում</a>
                        <a class="add-to-cart basket" href="#" data-id="{{$mainProduct->id}}"><i class="fa fa-shopping-cart"></i>զամբյուղ</a>
                        @if($mainProduct->count == 0)
                        <div class="shop-rgba-red rgba-banner">Առկա չէ պահեստում</div>
                        @endif
                    </div>
                    <div class="product-description product-description-brd">
                        <div class="overflow-h margin-bottom-5">
                            <div class="pull-left">
                                <h4 class="title-price"><a href="{{action('UsersController@getProduct',[$mainProduct->type->id,$mainProduct->id])}}">{{$mainProduct->name}}</a></h4>
                                <span class="gender">{{$mainProduct->type->name}}</span>
                            </div>    
                            <div class="product-price">
                                <span class="title-price">${{$mainProduct->price}}</span>
                                @if($mainProduct->new_price != '')
                                <span class="title-price line-through">${{$mainProduct->new_price}}</span>
                                @endif
                            </div>
                        </div>       
                    </div>
                </li>
                @endforeach    
            </ul>
        </div> 
        <!--=== End Illustration v2 ===-->

        <!--=== Illustration v3 ===-->
        <div class="row margin-bottom-50">
            @foreach($productTypes as $productType)
            <div class="col-md-4 md-margin-bottom-30">
                <div class="overflow-h">
                    <a class="illustration-v3 illustration-img1" style="background-image: url(/uploads/images/products/{{$productType['img']}}) !important" href="{{action('UsersController@getProducts',$productType['id'])}}">
                        <span class="illustration-bg">
                            <span class="illustration-ads">
                                <span class="illustration-v3-category">
                                    <span class="product-category" style="font-size:25px">{{$productType['type']}}</span>
                                    <span class="product-amount">{{$productType['count']}} Հատ</span>
                                </span>    
                            </span>    
                        </span>    
                    </a>
                </div>    
            </div>
            @endforeach
        </div>
        <!--=== End Illustration v3 ===-->

        <div class="heading heading-v1 margin-bottom-40">
            <h2>Նոր տեսականի</h2>
        </div>

        <!--=== Illustration v2 ===-->
        <div class="row illustration-v2">
            @foreach($bodyProducts as $bodyProduct)
            <div class="col-md-3 col-sm-6 md-margin-bottom-30">
                <div class="product-img">
                    <a href="{{action('UsersController@getProduct',[$bodyProduct->type->id,$bodyProduct->id])}}">
                        @if($bodyProduct->product_picture3 != '')
                            <img class="full-width img-responsive" src="/uploads/images/products/{{$bodyProduct->product_picture3}}" style="width:265px;height:397px">
                        @else
                            <img class="full-width img-responsive" src="/uploads/images/products/{{$bodyProduct->product_picture1}}" style="width:265px;height:397px">
                        @endif
                    </a>
                    <a class="product-review" href="{{action('UsersController@getProduct',[$bodyProduct->type->id,$bodyProduct->id])}}">Արագ Անցում</a>
                    <a class="add-to-cart basket" href="#" data-id="{{$bodyProduct->id}}"><i class="fa fa-shopping-cart"></i>զամբյուղ</a>
                    @if($mainProduct->count == 0)
                    <div class="shop-rgba-red rgba-banner">Առկա չէ պահեստում</div>
                    @else
                    <div class="shop-rgba-dark-green rgba-banner">նոր</div>
                    @endif
                </div>
                <div class="product-description product-description-brd">
                    <div class="overflow-h margin-bottom-5">
                        <div class="pull-left">
                            <h4 class="title-price"><a href="{{action('UsersController@getProduct',[$bodyProduct->type->id,$bodyProduct->id])}}">{{$bodyProduct->name}}</a></h4>
                            <span class="gender">{{$bodyProduct->type->name}}</span>
                        </div>    
                        <div class="product-price">
                            <span class="title-price">${{$bodyProduct->price}}</span>
                        </div>
                    </div>    
                </div>
            </div>
            @endforeach
        </div> 
        <!--=== End Illustration v2 ===-->
    </div>
    <!--=== End Product Content ===-->

    <!--=== Twitter-Block ===-->
    <div class="parallaxBg twitter-block margin-bottom-60">
        <div class="container">
            <div class="heading heading-v1 margin-bottom-20">
                <h2>Վերջին նորությունները</h2>
            </div>

            <div id="carousel-example-generic-v5" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li class="active rounded-x" data-target="#carousel-example-generic-v5" data-slide-to="0"></li>
                    <li class="rounded-x" data-target="#carousel-example-generic-v5" data-slide-to="1"></li>
                    <li class="rounded-x" data-target="#carousel-example-generic-v5" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <p>Աննախադեպ զեղչեր բոլոր խանութնեում</a><p>
                    </div>
                    <div class="item">
                        <p>25% զեղչեր բոլոր տեսականիների համար</p>
                    </div>
                    <div class="item">
                        <p>Աննախադեպ զեղչեր բոլոր տեսականիների համար</p>
                    </div>
                </div>
                
                <div class="carousel-arrow">
                    <a class="left carousel-control" href="#carousel-example-generic-v5" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic-v5" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>                        
        </div>    
    </div>
    <!--=== End Twitter-Block ===-->

    <div class="container">
        
        <!--=== Illustration v4 ===-->
        <div class="row illustration-v4 margin-bottom-40">
            <div class="col-md-4">
                <div class="heading heading-v1 margin-bottom-20">
                    <h2>Պահանջվածները</h2>
                </div>
                @foreach($productCounts as $productCount)
                <div class="thumb-product">
                    <img class="thumb-product-img" src="/uploads/images/products/{{$productCount->product_picture1}}" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="{{action('UsersController@getProduct',[$productCount->type->id,$productCount->id])}}">{{$productCount->name}}</a></h4>
                        <span class="thumb-product-type">{{$productCount->type->name}}</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">${{$productCount->price}}</li>
                        <li class="thumb-product-purchase"><a href="#" class="basket" data-id="{{$productCount->id}}"><i class="fa fa-shopping-cart"></i></a> </li>
                    </ul>    
                </div>
                @endforeach
            </div>
            <div class="col-md-4">
                <div class="heading heading-v1 margin-bottom-20">
                    <h2>Նոր տեսականի</h2>
                </div>
                @foreach($newProducts as $newProduct)
                <div class="thumb-product">
                    <img class="thumb-product-img" src="/uploads/images/products/{{$newProduct->product_picture1}}" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="{{action('UsersController@getProduct',[$newProduct->type->id,$newProduct->id])}}">{{$newProduct->name}}</a> </h4>
                        <span class="thumb-product-type">{{$newProduct->type->name}}</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">${{$newProduct->price}}</li>
                        <li class="thumb-product-purchase"><a href="#" class="basket" data-id="{{$newProduct->id}}"><i class="fa fa-shopping-cart"></i></a> </li>
                    </ul>    
                </div>
                @endforeach
            </div>
            <div class="col-md-4 padding">
                <div class="heading heading-v1 margin-bottom-20">
                    <h2>Զեղչվածները</h2>
                </div>
                @foreach($productPrices as $productPrice)
                <div class="thumb-product">
                    <img class="thumb-product-img" src="/uploads/images/products/{{$productPrice->product_picture1}}" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="{{action('UsersController@getProduct',[$productPrice->type->id,$productPrice->id])}}">{{$productPrice->name}}</a></h4>
                        <span class="thumb-product-type">{{$productPrice->type->name}}</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price line-through">${{$productPrice->price}}</li>
                        <li class="thumb-product-price">${{$productPrice->new_price}}</li>
                        <li class="thumb-product-purchase"><a href="#" class="basket" data-id="{{$productPrice->id}}"><i class="fa fa-shopping-cart"></i></a> </li>
                    </ul>    
                </div>
                @endforeach
            </div>
        </div><!--/end row-->
        <!--=== End Illustration v4 ===-->
    </div><!--/end cotnainer-->

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