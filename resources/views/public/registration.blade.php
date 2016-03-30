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
                <li class="active">Գրանցում</li>
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
                    {!! Form::open(['action' => ['UsersController@postRegistration'], 'class' => 'log-reg-block sky-form', 'role' => 'form', 'files' => 'true' ]) !!}
                        <h2>Ստեղծել նոր էջ</h2>

                        <div class="login-input reg-input">
                            <div class="row">
                                @include('message')
                                <div class="col-sm-6">
                                    <section>
                                        <label class="input">
                                            <input type="text" name="first_name" placeholder="First name" class="form-control">
                                        </label>
                                    </section>
                                </div>
                                <div class="col-sm-6">
                                    <section>
                                        <label class="input">
                                            <input type="text" name="last_name" placeholder="Last name" class="form-control">
                                        </label>
                                    </section>        
                                </div>
                            </div>
                            <section>
                                <label class="input">
                                    <input type="text" name="login" placeholder="Username" class="form-control">
                                </label>
                            </section> 
                            <section>
                                <label class="input">
                                    <input type="text" name="mobile_phonenumber" placeholder="Phone" class="form-control">
                                </label>
                            </section>                            
                            <section>
                                <label class="input">
                                    <input type="email" name="email" placeholder="Email address" class="form-control">
                                </label>
                            </section>                                
                            <section>
                                <label class="input">
                                    <input type="password" name="password" placeholder="Password" id="password" class="form-control">
                                </label>
                            </section>                                
                            <section>
                                <label class="input">
                                    <input type="password" name="password_confirmation" placeholder="Confirm password" class="form-control">
                                </label>
                            </section>                                
                        </div>
                        <button class="btn-u btn-u-sea-shop btn-block margin-bottom-20" type="submit">Ավելացնել նոր էջ</button>
                    {!! Form::close() !!}

                    <div class="margin-bottom-20"></div>
                    <p class="text-center">Արդեն ունեք էջ? <a href="{{action('UsersController@getLogin')}}">Մուտք</a></p>
                </div>
            </div><!--/end row-->
        </div><!--/end container-->
    </div>
    <!--=== End Registre ===-->

    @include('footer')
@endsection