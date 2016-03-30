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
                <li class="active">Իմ էջը</li>
            </ul>
        </div><!--/end container-->
    </div> 
    <!--=== End Breadcrumbs v4 ===-->
    <!--=== Registre ===-->
    <div class="log-reg-v3 content-md margin-bottom-30">
        <div class="container">
            <div class="row">
                <div class="col-md-7 md-margin-bottom-50">
                    <h2 class="welcome-title">Ձեր անձնական տվյալնեը</h2>
                    <div class="row margin-bottom-50">
                        {!! Form::open(['action' => ['UsersController@postEditUser'], 'class' => '', 'role' => 'form', 'files' => 'true' ]) !!}
                        <div class="col-sm-4 md-margin-bottom-20">
                            <div class="site-statistics">
                                <label for="id-input-file-3">
                                    @if($user->profile_picture != '')
                                    <img class="thumb-product-img" src="/uploads/images/{{$user->profile_picture}}" alt="" with="120" height="120">
                                    @else
                                    <img class="thumb-product-img" src="/uploads/images/user.png" alt="" with="120" height="120">
                                    @endif
                                </label>
                            </div>
                            {!! Form::file('profile_picture', array('id' => 'id-input-file-3','style' => 'display:none')) !!}
                        </div>
                        <div class="col-sm-1 md-margin-bottom-20"></div>
                        <div class="col-sm-7 md-margin-bottom-20">
                            <section class="col-sm-6">
                                <label class="input">
                                    <input type="text" name="first_name" placeholder="Last name" class="form-control" value="{{$user->first_name}}">
                                </label>
                            </section> 
                            <section class="col-sm-6">
                                <label class="input">
                                    <input type="text" name="last_name" placeholder="Last name" class="form-control" value="{{$user->last_name}}">
                                </label>
                            </section>
                            <section class="col-sm-6">
                                <label class="input">
                                    <input type="text" name="mobile_phonenumber" placeholder="Last name" class="form-control" value="{{$user->mobile_phonenumber}}">
                                </label>
                            </section>
                            <section class="col-sm-6">
                                <label class="input">
                                    <input type="text" name="login" placeholder="login" class="form-control" value="{{$user->login}}">
                                </label>
                            </section>
                            <section class="col-sm-6">
                                <label class="input">
                                    <input type="text" name="user_key" placeholder="user_key" class="form-control" value="{{$user->user_key}}" disabled>
                                </label>
                            </section>
                            <section class="col-sm-6">
                                <label class="input">
                                    <input type="text" name="balance" placeholder="balance" class="form-control" value="{{$user->balance}}" disabled>
                                </label>
                            </section>
                            <section class="col-sm-6">
                                <label class="input">
                                    <input type="text" name="address" placeholder="address" class="form-control" value="{{$user->address}}">
                                </label>
                            </section>
                            <section class="col-sm-6">
                                <label class="input">
                                    <button class="btn-u btn-u-sea-shop btn-block margin-bottom-20" type="submit">Edit</button>
                                </label>
                            </section>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>

                <div class="col-md-5">
                    <h2>Լիցքավորել Հաշիվը</h2>
                    <div class="login-input reg-input">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div><!--/end row-->
        </div><!--/end container-->
    </div>
    <!--=== End Registre ===-->

    @include('footer')
@endsection