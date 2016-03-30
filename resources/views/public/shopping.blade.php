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
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-in-table">
                                            <img class="img-responsive" src="assets/img/thumb/08.jpg" alt="">
                                            <div class="product-it-in">
                                                <h3>Double-Breasted</h3>
                                                <span>Sed aliquam tincidunt tempus</span>
                                            </div>    
                                        </td>
                                        <td>$ 160.00</td>
                                        <td>
                                            <button type='button' class="quantity-button" name='subtract' onclick='javascript: subtractQty1();' value='-'>-</button>
                                            <input type='text' class="quantity-field" name='qty1' value="5" id='qty1'/>
                                            <button type='button' class="quantity-button" name='add' onclick='javascript: document.getElementById("qty1").value++;' value='+'>+</button>
                                        </td>
                                        <td class="shop-red">$ 320.00</td>
                                        <td>
                                            <button type="button" class="close"><span>&times;</span><span class="sr-only">Close</span></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-in-table">
                                            <img class="img-responsive" src="assets/img/thumb/07.jpg" alt="">
                                            <div class="product-it-in">
                                                <h3>Vivamus ligula</h3>
                                                <span>Sed aliquam tincidunt tempus</span>
                                            </div>    
                                        </td>
                                        <td>$ 160.00</td>
                                        <td>
                                            <button type='button' class="quantity-button" name='subtract' onclick='javascript: subtractQty2();' value='-'>-</button>
                                            <input type='text' class="quantity-field" name='qty2' value="3" id='qty2'/>
                                            <button type='button' class="quantity-button" name='add' onclick='javascript: document.getElementById("qty2").value++;' value='+'>+</button>
                                        </td>
                                        <td class="shop-red">$ 320.00</td>
                                        <td>
                                            <button type="button" class="close"><span>&times;</span><span class="sr-only">Close</span></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-in-table">
                                            <img class="img-responsive" src="assets/img/thumb/06.jpg" alt="">
                                            <div class="product-it-in">
                                                <h3>Vivamus ligula</h3>
                                                <span>Sed aliquam tincidunt tempus</span>
                                            </div>    
                                        </td>
                                        <td>$ 160.00</td>
                                        <td>
                                            <button type='button' class="quantity-button" name='subtract' onclick='javascript: subtractQty3();' value='-'>-</button>
                                            <input type='text' class="quantity-field" name='qty3' value="1" id='qty3'/>
                                            <button type='button' class="quantity-button" name='add' onclick='javascript: document.getElementById("qty3").value++;' value='+'>+</button>
                                        </td>
                                        <td class="shop-red">$ 320.00</td>
                                        <td>
                                            <button type="button" class="close"><span>&times;</span><span class="sr-only">Close</span></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-in-table">
                                            <img class="img-responsive" src="assets/img/thumb/09.jpg" alt="">
                                            <div class="product-it-in">
                                                <h3>Vivamus ligula</h3>
                                                <span>Sed aliquam tincidunt tempus</span>
                                            </div>    
                                        </td>
                                        <td>$ 160.00</td>
                                        <td>
                                            <button type='button' class="quantity-button" name='subtract' onclick='javascript: subtractQty4();' value='-'>-</button>
                                            <input type='text' class="quantity-field" name='qty4' value="7" id='qty4'/>
                                            <button type='button' class="quantity-button" name='add' onclick='javascript: document.getElementById("qty4").value++;' value='+'>+</button>
                                        </td>
                                        <td class="shop-red">$ 320.00</td>
                                        <td>
                                            <button type="button" class="close"><span>&times;</span><span class="sr-only">Close</span></button>
                                        </td>
                                    </tr>
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
                                        <h4>Subtotal:</h4>
                                        <div class="total-result-in">
                                            <span>$ 1280.00</span>
                                        </div>    
                                    </li>    
                                    <li>
                                        <h4>Shipping:</h4>
                                        <div class="total-result-in">
                                            <span class="text-right">- - - -</span>
                                        </div>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="total-price">
                                        <h4>Total:</h4>
                                        <div class="total-result-in">
                                            <span>$ 1280.00</span>
                                        </div>
                                    </li>
                                    <li>
                                        <button type="button" class="btn-u btn-u-sea-shop">Apply Coupon</button>
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