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
                    <form id="sky-form4" class="log-reg-block sky-form">
                        <h2>Ստեղծել նոր էջ</h2>

                        <div class="login-input reg-input">
                            <div class="row">
                                <div class="col-sm-6">
                                    <section>
                                        <label class="input">
                                            <input type="text" name="firstname" placeholder="First name" class="form-control">
                                        </label>
                                    </section>
                                </div>
                                <div class="col-sm-6">
                                    <section>
                                        <label class="input">
                                            <input type="text" name="lastname" placeholder="Last name" class="form-control">
                                        </label>
                                    </section>        
                                </div>
                            </div>
                            <label class="select margin-bottom-15">
                                <select name="gender" class="form-control">
                                    <option value="0" selected disabled>Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Other</option>
                                </select>
                            </label>
                            <div class="row margin-bottom-10">
                                <div class="col-xs-6">
                                    <label class="select">
                                        <select name="month" class="form-control">
                                            <option disabled="" selected="" value="0">Month</option>
                                            <option>January</option>
                                            <option>February</option>
                                            <option>March</option>
                                            <option>April</option>
                                            <option>May</option>
                                            <option>June</option>
                                            <option>July</option>
                                            <option>August</option>
                                            <option>September</option>
                                            <option>October</option>
                                            <option>November</option>
                                            <option>December</option>
                                        </select>
                                    </label>    
                                </div>
                                <div class="col-xs-3">
                                    <input type="text" name="day" placeholder="Day" class="form-control">
                                </div>
                                <div class="col-xs-3">
                                    <input type="text" name="year" placeholder="Year" class="form-control">
                                </div>
                            </div>
                            <section>
                                <label class="input">
                                    <input type="text" name="username" placeholder="Username" class="form-control">
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
                                    <input type="password" name="passwordConfirm" placeholder="Confirm password" class="form-control">
                                </label>
                            </section>                                
                        </div>
                        <button class="btn-u btn-u-sea-shop btn-block margin-bottom-20" type="submit">Ավելացնել նոր էջ</button>
                    </form>

                    <div class="margin-bottom-20"></div>
                    <p class="text-center">Արդեն ունեք էջ? <a href="{{action('UsersController@getLogin')}}">Մուտք</a></p>
                </div>
            </div><!--/end row-->
        </div><!--/end container-->
    </div>
    <!--=== End Registre ===-->

    @include('footer')
@endsection