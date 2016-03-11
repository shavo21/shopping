<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contracts\UserInterface;
use Auth;
use Validator;

class ShopController extends Controller
{
    
    /**
     * Create a new instance of WebsitesController class.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('shop', ['except' => ['getLogin', 'postLogin']]);
    }
    /**
    * Render view for logging in the application shop-administrator.
    * GET /shop-admin/login
    *
    * @return view
    */
    public function getLogin()
    {
        $data=[
            'bodyClass' => 'login-layout'
        ];
        return view('shop-admin.login',$data);
    }

    /**
    * Login the application shop-admin.
    * POST /shop-admin/login
    *
    * @param  Request $request
    * @return view
    */
    public function postLogin(Request $request)
    {
        $login = $request->get('login');
        $password = $request->get('password');

        if (Auth::attempt(['login' => $login, 'password' => $password, 'role' => 'shop_admin' ]))
        {
            return redirect()->action('ShopController@getDashboard');
        }
        else
        {
            return redirect()->back()->with(['error_danger'=> trans('common.error_login')]);
        }
    }

    /**
    * Render dashboard view for shop-admin.
    * GET /shop-admin/dashboard
    *
    * @return view
    */
    public function getDashboard()
    {
        $data =[
            'bodyClass' => 'skin-3 no-skin',
            'authUser' => Auth::user()
        ];
        return view('shop-admin.dashboard',$data);
    }

    /**
    * Shop-admin logout from the system.
    * GET /shop-admin/logout
    *
    * @return response
    */
    public function getLogout()
    {
        Auth::logout();
        return redirect()->action('ShopController@getLogin');
    }

    /**
    * Post search user.
    * POST  /shop-admin/user
    *
    * @param  UserInterface $userRepo,Request $request
    *
    * @return view
    */
    public function postUser(UserInterface $userRepo,Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'user_key' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->with(['error_danger'=> trans('common.error_userKey')]);
        };
        $user = $userRepo->getOneByKey($data['user_key']);
        if($user){
            return redirect()->action('ShopController@getUserPage',$user->user_key);
        }else{
            return redirect()->back()->with(['error_danger'=> trans('common.error_userKey')]);
        }
    }

    /**
    * Get user page.
    * POST  /shop-admin/user-page/{key}
    *
    * @param  UserInterface $userRepo,$user_key
    *
    * @return view
    */
    public function getUserPage($user_key,UserInterface $userRepo)
    {
        $user = $userRepo->getOneByKey($user_key);
        $data = [
            'user' => $user,
            'bodyClass' => 'skin-3 no-skin',
            'authUser' => Auth::user()
        ];
        return view('shop-admin.user-page',$data);
    }

    /**
    * Post edit balance.
    * POST  /shop-admin/edit-balance/{id}
    *
    * @param  $id,UserInterface $userRepo,Request $request
    *
    * @return view
    */
    public function postEditBalance($id,UserInterface $userRepo,Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'balance' => 'required|integer',
            'percent' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->with(['error_danger'=> trans('common.error_balance')]);
        };
        $user = $userRepo->getOne($id);
        $dataUpdate['balance'] = $user->balance + $data['balance']*$data['percent']*0.01;
        $result = $userRepo->updateOne($id,$dataUpdate);
        return redirect()->action('ShopController@getDashboard')->with(['error'=> trans('common.error_success_balance')]);;
    }

}
