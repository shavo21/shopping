<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\BaseController;
use App\Contracts\ProductInterface;
use App\Contracts\TypeInterface;
use App\Contracts\UserInterface;
use App\Contracts\ShoppingInformationInterface;
use Auth;
use File;
use Validator;
use Session;
use angelleye;

class UsersController extends BaseController
{
    /**
    * Render view for logging in the user.
    * GET /login
    *
    * @return view
    */
    public function getLogin()
    {
        return view('public.login');
    }

    /**
    * Login the application user.
    * POST /login
    *
    * @param  Request $request
    * @return view
    */
    public function postLogin(Request $request)
    {
        $login = $request->get('login');
        $password = $request->get('password');
        if (Auth::attempt(['login' => $login, 'password' => $password]))
        {
            return redirect()->action('UsersController@getAccount');
        }
        else
        {
            return redirect()->back()->with(['error_danger'=> trans('errors.incorrect')]);
        }
    }

    /**
    * Render view my profile.
    * GET /account
    *
    * @return view
    */
    public function getAccount()
    {
        $data = [
            'user' => Auth::user(),
        ];
        return view('public.account',$data);
    }

    /**
    * Post edit-user.
    * POST /edit-user
    *
    * @return view
    */
    public function postEditUser(Request $request,UserInterface $userRepo)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'first_name' => 'required',
            'last_name' => 'required',
            'login' => 'required|unique:users,login,'.Auth::user()->id,
            'mobile_phonenumber' => 'required|numeric',
            'address' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->with(['error_danger'=> trans('common.error_user')]);
        };
        if(isset($data['profile_picture']) && $data['profile_picture'] != "")
        {
            $path = public_path() . '/uploads/images/';
            $name = str_random();
            $logoFile = $request->file('profile_picture')->getClientOriginalExtension();
            $result = $request->file('profile_picture')->move($path, $name.'.'.$logoFile);
            $data['profile_picture'] = $name.'.'.$logoFile;
        }
        if(isset($data['user_key'])){
            unset($data['user_key']);
        }
        if(isset($data['balance'])){
            unset($data['balance']);
        }
        $user = $userRepo->updateOne(Auth::user()->id,$data);
        return redirect()->back()->with(['error'=> trans('common.error_success')]);
    }

    /**
    * User logout from the system.
    * GET /logout
    *
    * @return response
    */
    public function getLogout()
    {
        Auth::logout();
        return redirect()->action('UsersController@getLogin');
    }

    /**
    * Render view user dashboard.
    * GET /dashboard
    *
    * @return view
    */
    public function getDashboard(ProductInterface $productRepo,TypeInterface $typeRepo)
    {
        $slideProducts = $productRepo->getProductSlide(5);
        $newPriceProducts = $productRepo->getProductByPrice(3);
        $mainProducts = $productRepo->getProductMain(6);
        $productCounts = $productRepo->getProductByCount(10,3);
        $types= $typeRepo->getTypes(3);
        foreach ($types as $key => $type){
            $productType = $productRepo->getProductByType($type->id);
            if(count($productType)>0){
                $img = $productType[0]->product_picture1;
            }else{
                $img = '';
            }
            $dataType[$key] = [
                'count' => count($productType),
                'type' => $type->name,
                'img' => $img,
                'id' => $type->id
            ];
        }
        $i = 0;
        for($i=0;$i<4;$i++){
            $bodyProducts[$i] = $slideProducts[$i+1];
        }

        $j = 0;
        for($j=0;$j<2;$j++){
            $productPrices[$j] = $newPriceProducts[$j+1];
        }
        $k = 1;
        for($k=1;$k<4;$k++){
            $newProducts[$k] = $mainProducts[$k+1];
        }
        $data = [
            'slideProducts' => $slideProducts,
            'newPriceProducts' => $productPrices,
            'mainProducts' => $mainProducts,
            'productTypes' => $dataType,
            'bodyProducts' => $bodyProducts,
            'productPrices' => $newPriceProducts,
            'newProducts' => $newProducts,
            'productCounts' => $productCounts
        ];
        return view('public.dashboard',$data);
    }

    /**
    * Render view for registration in the user.
    * GET /registration
    *
    * @return view
    */
    public function getRegistration()
    {
        return view('public.registration');
    }

    /**
    * Post registration in the user.
    * POST /registration
    *
    * @return view
    */
    public function postRegistration(Request $request,UserInterface $userRepo)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'first_name' => 'required',
            'last_name' => 'required',
            'login' => 'required|unique:users',
            'email' => 'required|unique:users',
            'mobile_phonenumber' => 'required|numeric',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->with(['error_danger'=> trans('common.error_user')]);
        };
        $userKey = rand(1111111111,9999999999);
        $data['user_key'] = $userKey;
        $data['password'] = bcrypt($data['password']);
        $user = $userRepo->createOne($data);
        return redirect()->back()->with(['error'=> trans('common.error_success')]);
    }

    /**
    * Render view products.
    * GET /products/{$type}
    *
    * @return view
    */
    public function getProducts($type,ProductInterface $productRepo,TypeInterface $typeRepo)
    {
        $products = $productRepo->getProductByeType($type);
        $type = $typeRepo->getOne($type);
        $data = [
            'products' => $products,
            'type' => $type
        ];
        return view('public.products',$data);
    }

    
    /**
    * Render view one producte.
    * GET /product/{$type}/{$id}
    *
    * @return view
    */
    public function getProduct($type,$id,ProductInterface $productRepo)
    {
        $product = $productRepo->getOne($id);
        $data = [
            'type' => $type,
            'id' => $id,
            'product' => $product
        ];
        return view('public.one-product',$data);
    }

    /**
    * Render view shopping.
    * GET /shopping
    *
    * @return view
    */
    public function getShopping(ShoppingInformationInterface $infoRepo)
    {
        $info = $infoRepo->getProducts(Auth::user()->id);
        $price = 0;
        foreach ($info as $inf){
            if($inf->product['new_price'] != '' || $inf->product['new_price'] != 0){
                $price += $inf->product['new_price'];
            }else{
                $price += $inf->product['price'];
            }
        }
        $data = [
            'info' => $info,
            'count' =>count($info),
            'price' => $price,
        ];
        return view('public.shopping',$data);
    }

    public function getBasket($id,ShoppingInformationInterface $infoRepo,ProductInterface $productRepo)
    {
        $product = $productRepo->getOne($id);
        $information = $infoRepo->getInformationById($id);
        $infoCount = count($information);
        if($infoCount == 0){
            if($product->new_price == '' || $product->new_price == 0){
                $price = $product->price;
            }else{
                $price = $product->new_price;
            }
            $data = [
                'user_id' => Auth::user()->id,
                'product_id' => $id,
                'price' => $price,
                'shopping' => 'No'
            ];
        }else{
            $error = 'true';
            return $error;
        }
        $info = $infoRepo->getProducts(Auth::user()->id);
        $count = count($info);
        $status = $infoRepo->create($data);
        return $count;
    }

    public function getBasketCount($id,ShoppingInformationInterface $infoRepo)
    {
        $info = $infoRepo->getProducts(Auth::user()->id);
        $count = count($info);
        return $count;
    }

    public function getDeleteBasket($id,ShoppingInformationInterface $infoRepo)
    {
        $info = $infoRepo->remove($id);
        return redirect()->back();
    }


    public function getResult(Request $request)
    {
        $PayPalConfig = config('paypal.configPaypal');
        $PayPal = new angelleye\PayPal\PayPal($PayPalConfig);
        $token = $request->get('token');
        Session::put('key', 'value');
        session(['token' => $request->get('token')]);
        $result = $PayPal->GetExpressCheckoutDetails($token);
        $data =[
            'TOKEN' => $request->get('token'),
            'PayerID' => $request->get('PayerID'),
            'BUILD' => 'Day'
        ];
        $result = $PayPal->CreateRecurringPaymentsProfile($result);
        dd($result);
    }
    public function getPaymant()
    {
        $DataArray = [];
        $PayPalConfig = config('paypal.configPaypal');
        $PayPal = new angelleye\PayPal\PayPal($PayPalConfig);
        $SECFields = array(
            'maxamt' => '200.00',                       // The expected maximum total amount the order will be, including S&H and sales tax.
            'returnurl' => 'http://shopping.dev/result',//$domain . 'standard/samples/DoExpressCheckoutPayment.php',                           // Required.  URL to which the customer will be returned after returning from PayPal.  2048 char max.
            'cancelurl' => 'http://shopping.dev/account',                             // Required.  URL to which the customer will be returned if they cancel payment on PayPal's site.
            'reqconfirmshipping' => '0',                // The value 1 indicates that you require that the customer's shipping address is Confirmed with PayPal.  This overrides anything in the account profile.  Possible values are 1 or 0.
            'noshipping' => '1',                        // The value 1 indicates that on the PayPal pages, no shipping address fields should be displayed.  Maybe 1 or 0.
            'allownote' => '1',                             // The value 1 indicates that the customer may enter a note to the merchant on the PayPal page during checkout.  The note is returned in the GetExpresscheckoutDetails response and the DoExpressCheckoutPayment response.  Must be 1 or 0.                             // URL for the image displayed as the header during checkout.  Max size of 750x90.  Should be stored on an https:// server or you'll get a warning message in the browser.
            'solutiontype' => 'Sole',                       // Type of checkout flow.  Must be Sole (express checkout for auctions) or Mark (normal express checkout)
            'landingpage' => 'Billing',                         // Type of PayPal page to display.  Can be Billing or Login.  If billing it shows a full credit card form.  If Login it just shows the login screen.
            'brandname' => 'Angell EYE',                            // A label that overrides the business name in the PayPal account on the PayPal hosted checkout pages.  127 char max.
            'customerservicenumber' => '555-555-5555',              // Merchant Customer Service number displayed on the PayPal Review page. 16 char max.
            'giftmessageenable' => '1',                     // Enable gift message widget on the PayPal Review page. Allowable values are 0 and 1
            'giftreceiptenable' => '1',                     // Enable gift receipt widget on the PayPal Review page. Allowable values are 0 and 1
            'giftwrapenable' => '1',                    // Enable gift wrap widget on the PayPal Review page.  Allowable values are 0 and 1.
            'giftwrapname' => 'Box with Ribbon',                        // Label for the gift wrap option such as "Box with ribbon".  25 char max.
            'giftwrapamount' => '2.50',                     // Amount charged for gift-wrap service.
            'buyeremailoptionenable' => '1',            // Enable buyer email opt-in on the PayPal Review page. Allowable values are 0 and 1
            'surveyenable' => '1',                      // Enable survey functionality. Allowable values are 0 and 1
            'buyerregistrationdate' => '2012-07-14T00:00:00Z',              // Date when the user registered with the marketplace.
        );
        // Basic array of survey choices.  Nothing but the values should go in here.  
        $SurveyChoices = array('Yes', 'No');
        $Payments = array();
        $Payment = array(
            'amt' => '100.00',                          // Required.  The total cost of the transaction to the customer.  If shipping cost and tax charges are known, include them in this value.  If not, this value should be the current sub-total of the order.
            'currencycode' => 'USD',                    // A three-character currency code.  Default is USD.
            'itemamt' => '80.00',                       // Required if you specify itemized L_AMT fields. Sum of cost of all items in this order.  
            'shippingamt' => '15.00',                   // Total shipping costs for this order.  If you specify SHIPPINGAMT you mut also specify a value for ITEMAMT.
            'insuranceoptionoffered' => '',         // If true, the insurance drop-down on the PayPal review page displays the string 'Yes' and the insurance amount.  If true, the total shipping insurance for this order must be a positive number.
            'handlingamt' => '',                    // Total handling costs for this order.  If you specify HANDLINGAMT you mut also specify a value for ITEMAMT.
            'taxamt' => '5.00',                         // Required if you specify itemized L_TAXAMT fields.  Sum of all tax items in this order. 
            'desc' => 'This is a test order.',                          // Description of items on the order.  127 char max.
            'notetext' => 'This is a test note before ever having left the web site.',                      // Note to the merchant.  255 char max.  
            'paymentaction' => 'Sale',                  // How you want to obtain the payment.  When implementing parallel payments, this field is required and must be set to Order. 
            );
                        
        $PaymentOrderItems = array();
        $Item = array(
            'name' => 'Widget 123',                             // Item name. 127 char max.
            'desc' => 'Widget 123',                             // Item description. 127 char max.
            'amt' => '40.00',                               // Cost of item.
            'number' => '123',                          // Item number.  127 char max.
            'qty' => '1',                               // Item qty on order.  Any positive integer.
            'itemurl' => 'http://www.angelleye.com/products/123.php',                           // URL for the item.
            );
        array_push($PaymentOrderItems, $Item);
        $Item = array(
            'name' => 'Widget 456',                             // Item name. 127 char max.
            'desc' => 'Widget 456',                             // Item description. 127 char max.
            'amt' => '40.00',                               // Cost of item.
            'number' => '456',                          // Item number.  127 char max.
            'qty' => '1',                               // Item qty on order.  Any positive integer.
            'itemurl' => 'http://www.angelleye.com/products/456.php',                           // URL for the item.
            'itemcategory' => 'Digital',                        // One of the following values:  Digital, Physical
            );
        array_push($PaymentOrderItems, $Item);
        $Payment['order_items'] = $PaymentOrderItems;
        array_push($Payments, $Payment);
        $BuyerDetails = array(
            );
                                
        // For shipping options we create an array of all shipping choices similar to how order items works.
        $ShippingOptions = array();
        $Option = array(
        
            );
        array_push($ShippingOptions, $Option);
                
        $BillingAgreements = array();
        $Item = array(
            'l_billingtype' => 'MerchantInitiatedBilling',                            // Required.  Type of billing agreement.  For recurring payments it must be RecurringPayments.  You can specify up to ten billing agreements.  For reference transactions, this field must be either:  MerchantInitiatedBilling, or MerchantInitiatedBillingSingleSource
            'l_billingagreementdescription' => 'Billing Agreement',           // Required for recurring payments.  Description of goods or services associated with the billing agreement.  
            'l_paymenttype' => 'Any',                             // Specifies the type of PayPal payment you require for the billing agreement.  Any or IntantOnly
            );
        array_push($BillingAgreements, $Item);
        $PayPalRequest = array(
           'SECFields' => $SECFields, 
           'SurveyChoices' => $SurveyChoices, 
           'BillingAgreements' => $BillingAgreements, 
           'Payments' => $Payments
           );
        $_SESSION['SetExpressCheckoutResult'] = $PayPal -> SetExpressCheckout($PayPalRequest);
        echo '<a href="' . $_SESSION['SetExpressCheckoutResult']['REDIRECTURL'] . '">Click here to continue.</a><br /><br />';
        echo '<pre/>';
    }
}
