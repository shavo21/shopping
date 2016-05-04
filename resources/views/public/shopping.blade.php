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
    <!--=== Content Medium Part ===-->
    <div class="content-md margin-bottom-30">
        <div class="container">
            <form class="shopping-cart" action="#">
                <div>
                    <div class="header-tags">            
                        <div class="overflow-h">
                            <h2>Ձեր ընտրած ապրանքները</h2>
                        </div>    
                    </div>
                    <section>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Ապրանք</th>
                                        <th>Զեղչ</th>
                                        <th>Պահեստում Առկա է</th>
                                        <th>Արժեք</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($info as $inf)
                                    <tr>
                                        <td class="product-in-table">
                                            <img class="img-responsive" src="uploads/images/products/{{$inf->product['product_picture1']}}" alt="">
                                            <div class="product-it-in">
                                                <h3>{{$inf->product['name']}}</h3>
                                            </div>    
                                        </td>
                                        <td>
                                            @if($inf->product['new_price'] != '' || $inf->product['new_price'] != 0)
                                            <span style="color:green">ԱՅՈ</span>
                                            @else
                                            <span style="color:red">ՈՉ</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{$inf->product['count']}} Հատ
                                        </td>
                                        <td class="shop-red">
                                            @if($inf->product['new_price'] != '' || $inf->product['new_price'] != 0)
                                            $ {{$inf->product['new_price']}}
                                            @else
                                            $ {{$inf->product['price']}}
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{action('UsersController@getDeleteBasket',$inf->id)}}"><button type="button" class="close"><span>&times;</span><span class="sr-only">Close</span></button></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>                  

                    <div class="coupon-code">
                        <div class="row">
                            <div class="col-sm-4 sm-margin-bottom-30">                               
                            </div>
                            <div class="col-sm-3 col-sm-offset-5">
                                <ul class="list-inline total-result">
                                    <li>
                                        <h4>Ապրանքների քանակ:</h4>
                                        <div class="total-result-in">
                                            <span>{{$count}}</span>
                                        </div>    
                                    </li>    
                                    <li class="total-price">
                                        <h4>Ընհանուր արժեք:</h4>
                                        <div class="total-result-in">
                                            <span>$ {{$price}}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <button type="button" class="btn-u btn-u-sea-shop">Գնել Հիմա</button>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>    
                </div>
            </form>
        </div><!--/end container-->
    </div>
    <!--=== End Content Medium Part ===-->

    @include('footer')
@endsection