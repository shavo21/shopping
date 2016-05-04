    {!! Form::hidden('token', csrf_token(),['class' => 'token']) !!}
    <!--=== Header v5 ===-->   
    <div class="header-v5 header-static">
        <!-- Topbar v3 -->
        <div class="topbar-v3">

            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-inline right-topbar pull-right">
                            <li>
                                @if(!Auth::user())
                                <a href="{{action('UsersController@getLogin')}}">Մուտք</a> | <a href="{{action('UsersController@getRegistration')}}">Գրանցում</a>
                                @else
                                <a href="{{action('UsersController@getLogout')}}">Ելք</a> 
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--/container-->
        </div>
        <!-- End Topbar v3 -->

        <!-- Navbar -->
        <div class="navbar navbar-default mega-menu" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{action('UsersController@getDashboard')}}">
                        <img id="logo-header" src="{!! url('/assets/images/logo1.png') !!}" style="height:25px !important;width: 200px !important" alt="Logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <!-- Shopping Cart -->
                    <ul class="list-inline shop-badge badge-lists badge-icons pull-right">
                        <li>
                            @if(!Auth::user())
                            <a href="{{action('UsersController@getLogin')}}">
                            @else
                            <a href="{{action('UsersController@getShopping')}}">
                            @endif
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                            <input type='hidden' value="">
                            <span class="badge badge-sea rounded-x" id="boasket_count"></span>
                            @if(Auth::user())
                            <span id='userAccount' data-name="{{Auth::user()->id}}"></span>
                            @endif
                        </li>
                    </ul>
                    <!-- End Shopping Cart -->

                    <!-- Nav Menu -->
                    <ul class="nav navbar-nav">
                        <!-- Pages -->
                        <li class="dropdown active">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
                                Ապրանքներ
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($types as $type)
                                <li class=""><a href="{{action('UsersController@getProducts',$type->id)}}">{{$type->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <!-- End Pages -->

                        <!-- Promotion -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
                                Սպասարկում
                            </a>
                        </li>
                        <!-- End Promotion -->

                        <!-- Gifts -->
                        <li class="dropdown mega-menu-fullwidth">
                            @if(Auth::user())
                            <a href="{{action('UsersController@getAccount')}}" class="dropdown-toggle">
                            @else
                            <a href="{{action('UsersController@getLogin')}}" class="dropdown-toggle">
                            @endif
                                Իմ էջը
                            </a>
                        </li>
                        <!-- End Gifts -->

                        <!-- Books -->
                        <li class="dropdown mega-menu-fullwidth">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
                                Մեր մասին
                            </a>
                        </li>
                        <!-- End Books -->

                        <!-- Clothes -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-delay="1000">
                                Հետադարձ կապ
                            </a>
                        </li>
                        <!-- End Clothes -->

                    </ul>
                    <!-- End Nav Menu -->
                </div>
            </div>    
        </div>            
        <!-- End Navbar -->
    </div>
    <div class="alert alert-danger" id="error_basket" style="display:none">
        Ձեր ընտրած ապրանքն արդեն կա զամբյուղում
    </div>
    <!--=== End Header v5 ===-->