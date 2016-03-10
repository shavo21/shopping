@extends('app-public')

@section('content')
    @include('header-menu-public')

    <!--=== Slider ===-->
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <!-- SLIDE -->
                <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Տեսարան 1">
                    <!-- MAIN IMAGE -->
                    <img src="assets/img/1.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                    <div class="tp-caption revolution-ch1 sft start"
                        data-x="center"
                        data-hoffset="0"
                        data-y="100"
                        data-speed="1500"
                        data-start="500"
                        data-easing="Back.easeInOut"
                        data-endeasing="Power1.easeIn"                        
                        data-endspeed="300">
                        մեր նոր <br>
                        <strong>տեսականին</strong><br>
                        այստեղ է
                    </div>

                    <!-- LAYER -->
                    <div class="tp-caption sft"
                        data-x="center"
                        data-hoffset="0"
                        data-y="380"
                        data-speed="1600"
                        data-start="1800"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 6">
                        <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Գնել հիմա</a>
                    </div>
                </li>
                <!-- END SLIDE -->

                <!-- SLIDE -->
                <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Տեսարան 2">
                    <!-- MAIN IMAGE -->
                    <img src="assets/img/5.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                    <!-- LAYER -->
                    <div class="tp-caption sft"
                        data-x="center"
                        data-hoffset="0"
                        data-y="300"
                        data-speed="1600"
                        data-start="1800"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 6">
                        <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Գնել հիմա</a>
                    </div>
                </li>
                <!-- END SLIDE -->

                <!-- SLIDE -->
                <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Տեսարան 3">
                    <!-- MAIN IMAGE -->
                    <img src="assets/img/3.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="right top" data-bgrepeat="no-repeat">

                    <!-- LAYER -->
                    <div class="tp-caption sft"
                        data-x="right"
                        data-hoffset="0"
                        data-y="300"
                        data-speed="1600"
                        data-start="2800"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 6">
                        <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Գնել հիմա</a>
                    </div>
                </li>
                <!-- END SLIDE -->

                <!-- SLIDE -->
                <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Տեսարան 4">
                    <!-- MAIN IMAGE -->
                    <img src="assets/img/2.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                    <div class="tp-caption revolution-ch1 sft start"
                        data-x="center"
                        data-hoffset="0"
                        data-y="100"
                        data-speed="1500"
                        data-start="500"
                        data-easing="Back.easeInOut"
                        data-endeasing="Power1.easeIn"                        
                        data-endspeed="300">
                       Կանացի Աքսեսուարներ
                    </div>


                    <!-- LAYER -->
                    <div class="tp-caption sft"
                        data-x="center"
                        data-hoffset="0"
                        data-y="370"
                        data-speed="1600"
                        data-start="2800"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 6">
                        <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Գնել հիմա</a>
                    </div>
                </li>
                <!-- END SLIDE -->                

                <!-- SLIDE -->
                <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Տեսարան 5">
                    <!-- MAIN IMAGE -->
                    <img src="assets/img/4.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="right top" data-bgrepeat="no-repeat">

                    <!-- LAYER -->
                    <div class="tp-caption sft"
                        data-x="right"
                        data-hoffset="0"
                        data-y="300"
                        data-speed="1600"
                        data-start="2800"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 6">
                        <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Գնել հիմա</a>
                    </div>
                </li>
                <!-- END SLIDE -->
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>            
        </div>
    </div>
    <!--=== End Slider ===-->

    <!--=== Product Content ===-->
    <div class="container content-md">
        <!--=== Illustration v1 ===-->
        <div class="row margin-bottom-60">
            <div class="col-md-6 md-margin-bottom-30">
                <div class="overflow-h">
                    <div class="illustration-v1 illustration-img1">
                        <div class="illustration-bg">
                            <div class="illustration-ads ad-details-v1">
                                <h3>Նոր զեղչ 30% - 60%</h3>
                                <a class="btn-u btn-brd btn-brd-hover btn-u-light" href="#">Գնել Հիմա</a>
                            </div>    
                        </div>    
                    </div>
                </div>    
            </div>
            <div class="col-md-6">
                <div class="overflow-h">
                    <a class="illustration-v1 illustration-img2" href="#">
                        <span class="illustration-bg">
                            <span class="illustration-ads ad-details-v2">
                                <span class="item-time">Գարուն 2016</span>
                                <span class="item-name">Lacoste</span>
                            </span>
                        </span>
                    </a>
                </div>    
            </div>
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
                <li class="item">
                    <div class="product-img">
                        <a href="shop-ui-inner.html"><img class="full-width img-responsive" src="assets/img/blog/09.jpg" alt=""></a>
                        <a class="product-review" href="shop-ui-inner.html">Արագ Անցում</a>
                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>զամբյուղ</a>
                    </div>
                    <div class="product-description product-description-brd">
                        <div class="overflow-h margin-bottom-5">
                            <div class="pull-left">
                                <h4 class="title-price"><a href="shop-ui-inner.html">Տեսակ</a></h4>
                                <span class="gender">Անուն</span>
                            </div>    
                            <div class="product-price">
                                <span class="title-price">$95.00</span>
                            </div>
                        </div>       
                    </div>
                </li>
                <li class="item">
                    <div class="product-img">
                        <a href="shop-ui-inner.html"><img class="full-width img-responsive" src="assets/img/blog/26.jpg" alt=""></a>
                        <a class="product-review" href="shop-ui-inner.html">Արագ Անցում</a>
                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>զամբյուղ</a>
                    </div> 
                    <div class="product-description product-description-brd">
                        <div class="overflow-h margin-bottom-5">
                            <div class="pull-left">
                                <h4 class="title-price"><a href="shop-ui-inner.html">Տեսակ</a></h4>
                                <span class="gender">անուն</span>
                            </div>    
                            <div class="product-price">
                                <span class="title-price">$60.00</span>
                                <span class="title-price line-through">$95.00</span>
                            </div>
                        </div>       
                    </div>
                </li>
                <li class="item">
                    <div class="product-img">
                        <a href="shop-ui-inner.html"><img class="full-width img-responsive" src="assets/img/blog/11.jpg" alt=""></a>
                        <a class="product-review" href="shop-ui-inner.html">Արագ Անցում</a>
                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>զամբյուղ</a>
                    </div> 
                    <div class="product-description product-description-brd">
                        <div class="overflow-h margin-bottom-5">
                            <div class="pull-left">
                                <h4 class="title-price"><a href="shop-ui-inner.html">Տեսակ</a></h4>
                                <span class="gender">անուն</span>
                            </div>    
                            <div class="product-price">
                                <span class="title-price">$95.00</span>
                            </div>
                        </div>      
                    </div>
                </li>
                <li class="item">
                    <div class="product-img">
                        <a href="shop-ui-inner.html"><img class="full-width img-responsive" src="assets/img/blog/12.jpg" alt=""></a>
                        <a class="product-review" href="shop-ui-inner.html">Արագ Անցում</a>
                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>զամբյուղ</a>
                        <div class="shop-rgba-dark-green rgba-banner">Նոր</div>
                    </div> 
                    <div class="product-description product-description-brd">
                        <div class="overflow-h margin-bottom-5">
                            <div class="pull-left">
                                <h4 class="title-price"><a href="shop-ui-inner.html">Տեսակ</a></h4>
                                <span class="gender">անուն</span>
                            </div>    
                            <div class="product-price">
                                <span class="title-price">$95.00</span>
                            </div>
                        </div>       
                    </div>
                </li>
                <li class="item">
                    <div class="product-img">
                        <a href="shop-ui-inner.html"><img class="full-width img-responsive" src="assets/img/blog/10.jpg" alt=""></a>
                        <a class="product-review" href="shop-ui-inner.html">Արագ Անցում</a>
                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>զամբյուղ</a>
                    </div> 
                    <div class="product-description product-description-brd">
                        <div class="overflow-h margin-bottom-5">
                            <div class="pull-left">
                                <h4 class="title-price"><a href="shop-ui-inner.html">Տեսակ</a></h4>
                                <span class="gender">անուն</span>
                            </div>    
                            <div class="product-price">
                                <span class="title-price">$95.00</span>
                            </div>
                        </div>       
                    </div>
                </li>
                <li class="item">
                    <div class="product-img">
                        <a href="shop-ui-inner.html"><img class="full-width img-responsive" src="assets/img/blog/11.jpg" alt=""></a>
                        <a class="product-review" href="shop-ui-inner.html">Արագ Անցում</a>
                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>զամբյուղ</a>
                        <div class="shop-rgba-red rgba-banner">Առկա չէ պահեստում</div>
                    </div> 
                    <div class="product-description product-description-brd">
                        <div class="overflow-h margin-bottom-5">
                            <div class="pull-left">
                                <h4 class="title-price"><a href="shop-ui-inner.html">Տեսակ</a></h4>
                                <span class="gender">անուն</span>
                            </div>    
                            <div class="product-price">
                                <span class="title-price">$95.00</span>
                            </div>
                        </div>     
                    </div>
                </li>    
            </ul>
        </div> 
        <!--=== End Illustration v2 ===-->

        <!--=== Illustration v3 ===-->
        <div class="row margin-bottom-50">
            <div class="col-md-4 md-margin-bottom-30">
                <div class="overflow-h">
                    <a class="illustration-v3 illustration-img1" href="#">
                        <span class="illustration-bg">
                            <span class="illustration-ads">
                                <span class="illustration-v3-category">
                                    <span class="product-category">Տղամարդու</span>
                                    <span class="product-amount">56 Հատ</span>
                                </span>    
                            </span>    
                        </span>    
                    </a>
                </div>    
            </div>
            <div class="col-md-4 md-margin-bottom-30">
                <div class="overflow-h">
                    <a class="illustration-v3 illustration-img2" href="#">
                        <span class="illustration-bg">
                            <span class="illustration-ads">
                                <span class="illustration-v3-category">
                                    <span class="product-category">Կանացի</span>
                                    <span class="product-amount">56 հատ</span>
                                </span>    
                            </span>    
                        </span>    
                    </a>
                </div>    
            </div>
            <div class="col-md-4">
                <div class="overflow-h">
                    <a class="illustration-v3 illustration-img3" href="#">
                        <span class="illustration-bg">
                            <span class="illustration-ads">
                                <span class="illustration-v3-category">
                                    <span class="product-category">Երեխաի</span>
                                    <span class="product-amount">56 հատ</span>
                                </span>    
                            </span>    
                        </span>    
                    </a>
                </div>    
            </div>
        </div>
        <!--=== End Illustration v3 ===-->

        <div class="heading heading-v1 margin-bottom-40">
            <h2>Նոր տեսականի</h2>
        </div>

        <!--=== Illustration v2 ===-->
        <div class="row illustration-v2">
            <div class="col-md-3 col-sm-6 md-margin-bottom-30">
                <div class="product-img">
                    <a href="shop-ui-inner.html"><img class="full-width img-responsive" src="assets/img/blog/25.jpg" alt=""></a>
                    <a class="product-review" href="shop-ui-inner.html">Արագ Անցում</a>
                    <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>զամբյուղ</a>
                </div>
                <div class="product-description product-description-brd">
                    <div class="overflow-h margin-bottom-5">
                        <div class="pull-left">
                            <h4 class="title-price"><a href="shop-ui-inner.html">տեսակ</a></h4>
                            <span class="gender">անուն</span>
                        </div>    
                        <div class="product-price">
                            <span class="title-price">$95.00</span>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="col-md-3 col-sm-6 md-margin-bottom-30">
                <div class="product-img">
                    <a href="shop-ui-inner.html"><img class="full-width img-responsive" src="assets/img/blog/09.jpg" alt=""></a>
                    <a class="product-review" href="shop-ui-inner.html">Արագ Անցում</a>
                    <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>զամբյուղ</a>
                </div> 
                <div class="product-description product-description-brd">
                    <div class="overflow-h margin-bottom-5">
                        <div class="pull-left">
                            <h4 class="title-price"><a href="shop-ui-inner.html">տեսակ</a></h4>
                            <span class="gender">անուն</span>
                        </div>    
                        <div class="product-price">
                            <span class="title-price">$60.00</span>
                            <span class="title-price line-through">$95.00</span>
                        </div>
                    </div>       
                </div>
            </div>
            <div class="col-md-3 col-sm-6 md-margin-bottom-30">
                <div class="product-img">
                    <a href="shop-ui-inner.html"><img class="full-width img-responsive" src="assets/img/blog/10.jpg" alt=""></a>
                    <a class="product-review" href="shop-ui-inner.html">Արագ Անցում</a>
                    <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>զամբյուղ</a>
                    <div class="shop-rgba-red rgba-banner">Առկա չէ պահեստում</div>
                </div> 
                <div class="product-description product-description-brd">
                    <div class="overflow-h margin-bottom-5">
                        <div class="pull-left">
                            <h4 class="title-price"><a href="shop-ui-inner.html">տեսակ</a></h4>
                            <span class="gender">անուն</span>
                        </div>    
                        <div class="product-price">
                            <span class="title-price">$95.00</span>
                        </div>
                    </div>      
                </div>
            </div>
            <div class="col-md-3 col-sm-6 md-margin-bottom-30">
                <div class="product-img">
                    <a href="shop-ui-inner.html"><img class="full-width img-responsive" src="assets/img/blog/11.jpg" alt=""></a>
                    <a class="product-review" href="shop-ui-inner.html">Արագ Անցում</a>
                    <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>զամբյուղ</a>
                    <div class="shop-rgba-dark-green rgba-banner">նոր</div>
                </div> 
                <div class="product-description product-description-brd">
                    <div class="overflow-h margin-bottom-5">
                        <div class="pull-left">
                            <h4 class="title-price"><a href="shop-ui-inner.html">տեսակ</a></h4>
                            <span class="gender">անուն</span>
                        </div>    
                        <div class="product-price">
                            <span class="title-price">$95.00</span>
                        </div>
                    </div>      
                </div>
            </div>
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
                <div class="thumb-product">
                    <img class="thumb-product-img" src="assets/img/thumb/08.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Տեսակ</a></h4>
                        <span class="thumb-product-type">Անուն</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$65.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> </li>
                    </ul>    
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="assets/img/thumb/09.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Տեսակ</a> </h4>
                        <span class="thumb-product-type">Անուն</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$75.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> </li>
                    </ul>    
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="assets/img/thumb/03.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Տեսակ</a></h4>
                        <span class="thumb-product-type">Անուն</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$75.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> </li>
                    </ul>    
                </div>
            </div>
            <div class="col-md-4">
                <div class="heading heading-v1 margin-bottom-20">
                    <h2>Նոր տեսականի</h2>
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="assets/img/thumb/02.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Տեսակ</a> </h4>
                        <span class="thumb-product-type">Անուն</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$75.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> </li>
                    </ul>    
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="assets/img/thumb/10.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Տեսակ</a></h4>
                        <span class="thumb-product-type">Անուն</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$75.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>    
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="assets/img/thumb/06.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Տեսակ</a></h4>
                        <span class="thumb-product-type">Անուն</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$65.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>    
                </div>
            </div>
            <div class="col-md-4 padding">
                <div class="heading heading-v1 margin-bottom-20">
                    <h2>Զեղչվածները</h2>
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="assets/img/thumb/07.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Տեսակ</a></h4>
                        <span class="thumb-product-type">Անուն</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price line-through">$75.00</li>
                        <li class="thumb-product-price">$65.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> </li>
                    </ul>    
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="assets/img/thumb/04.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Տեսակ</a></h4>
                        <span class="thumb-product-type">Անուն</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price line-through">$75.00</li>
                        <li class="thumb-product-price">$65.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> </li>
                    </ul>    
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="assets/img/thumb/05.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Տեսակ</a></h4>
                        <span class="thumb-product-type">Անուն</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price line-through">$100.00</li>
                        <li class="thumb-product-price">$75.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> </li>
                    </ul>    
                </div>
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