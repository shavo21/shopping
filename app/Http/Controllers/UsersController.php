<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\BaseController;
use App\Contracts\ProductInterface;
use App\Contracts\TypeInterface;
use App\Contracts\UserInterface;
use Auth;
use File;
use Validator;
use Session;

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
        if(!Session::has('shopp')){
            $data = [];
            $count = count($data);
            session(['count' => $count]);
            $data = json_encode($data);
            session(['shopp'=>$data]);
        }
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
        if(!Session::has('shopp')){
            $data = [];
            $count = count($data);
            session(['count' => $count]);
            $data = json_encode($data);
            session(['shopp'=>$data]);
        }
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
        Session::forget('shopp');
        Session::forget('count');
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
        if(!Session::has('shopp')){
            $data = [];
            $count = count($data);
            session(['count' => $count]);
            $data = json_encode($data);
            session(['shopp',$data]);
        }
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
        if(!Session::has('shopp')){
            $data = [];
            $count = count($data);
            session(['count' => $count]);
            $data = json_encode($data);
            session(['shopp'=>$data]);
        }
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
        
        if(!Session::has('shopp')){
            $data = [];
            $count = count($data);
            session(['count' => $count]);
            $data = json_encode($data);
            session(['shopp'=>$data]);
        }
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
        if(!Session::has('shopp')){
            $data = [];
            $count = count($data);
            session(['count' => $count]);
            $data = json_encode($data);
            session(['shopp' => $shopp]);
        }
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
    public function getShopping()
    {
        if(!Session::has('shopp')){
            $data = [];
            $count = count($data);
            $data = json_encode($data);
            session(['count' => $count]);
            session(['shopp' => $shopp]);
        }
        return view('public.shopping');
    }

    public function getBasket($id)
    {
        dd(Session::get('count'));
        $shoppData = Session::get('shopp');
        $shoppData = json_decode($shoppData);
        if(!in_array($id, $shoppData)){
            array_push($shoppData, $id);
        }
        $count = count($shoppData);
        $shoppData = json_encode($shoppData);
        Session::forget('shopp');
        Session::forget('count');
        session(['shopp' => $shopp]);
        session(['count' => $count]);
        dd(Session::get('count'));
    }
}
