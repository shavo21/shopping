@extends('app-public')

@section('scripts')
	<link rel="stylesheet" href="assets/css/pages/log-reg-v3.css">
@endsection

@section('content')
    @include('header-menu-public')
    <!--=== Breadcrumbs v4 ===-->
    <div class="breadcrumbs-v4">
        <div class="container">
            <h1>ARM Shop <span class="shop-green">Խանութների</span> Ցանց</h1>
            <ul class="breadcrumb-v4-in">
                <li><a href="{{action('UsersController@getDashboard')}}">Գլխավոր</a></li>
                <li class="active">Մուտք</li>
            </ul>
        </div><!--/end container-->
    </div> 
    <!--=== End Breadcrumbs v4 ===-->
    <!--=== Registre ===-->
    <div class="log-reg-v3 content-md margin-bottom-30">
        <div class="container">
            <div class="row">
                <div class="col-md-7 md-margin-bottom-50">
                    <h2 class="welcome-title">Բարի Գալուստ  ARM Shop</h2>
                    <p>Կայքը հասանելի է ողջ աշխարհով և կարող եք օգտվել աշխարհի ցանկացած վայրից: Կայքում առկա ապրանքների, տեսականիների և օգտատերի քանակները հետևյալն է՝</p><br>
                    <div class="row margin-bottom-50">
                        <div class="col-sm-4 md-margin-bottom-20">
                            <div class="site-statistics">
                                <span>20,039</span>
                                <small>Տեսականի</small>
                            </div>    
                        </div>
                        <div class="col-sm-4 md-margin-bottom-20">
                            <div class="site-statistics">
                                <span>54,283</span>
                                <small>Ապրանք</small>
                            </div>    
                        </div>
                        <div class="col-sm-4">
                            <div class="site-statistics">
                                <span>376k</span>
                                <small>Խանութ</small>
                            </div>    
                        </div>
                    </div>
                    <div class="members-number">
                        <h3>Գրանցված են ավելի քան<span class="shop-green">13,000</span>անդամներ ամբողջ աշխարհում</h3>
                        <img class="img-responsive" src="assets/img/map.png" alt="">
                    </div>    
                </div>

                <div class="col-md-5">
                    <form id="sky-form1" class="log-reg-block sky-form">
                        <h2>Log in to your account</h2>

                        <section>
                            <label class="input login-input">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="email" placeholder="Մուտքանուն" name="email" class="form-control">
                                </div>
                            </label>
                        </section>        
                        <section>
                            <label class="input login-input no-border-top">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" placeholder="Գաղտնաբառ" name="password" class="form-control">
                                </div>    
                            </label>
                        </section>
                        <div class="row margin-bottom-5">
                            <div class="col-xs-6">
                                <label class="checkbox">
                                    <input type="checkbox" name="checkbox"/>
                                    <i></i>
                                    Հիշիր ինձ
                                </label>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="#">Մոռացեք ձեր Գաղտնաբառը?</a>
                            </div>
                        </div>
                        <button class="btn-u btn-u-sea-shop btn-block margin-bottom-20" type="submit">Մուտք</button>
                    </form>
                    
                    <div class="margin-bottom-20"></div>
                    <p class="text-center">Չունեք ձեր անհատական էջը? Իմացեք ավելին եւ <a href="{{action('UsersController@getRegistration')}}">Գրանցվեք</a></p>
                </div>
            </div><!--/end row-->
        </div><!--/end container-->
    </div>
    <!--=== End Registre ===-->

    @include('footer')
@endsection