<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    /**
    * Render view for logging in the application shop-administrator.
    * GET /shop/admin/login
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
    * POST /shop/admin/login
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
            return redirect()->back()->withError(trans('errors.incorrect'));
        }
    }

    /**
    * Render dashboard view for shop-admin.
    * GET /shop/admin/dashboard
    *
    * @return view
    */
    public function getDashboard()
    {

    }

    /**
    * Shop-admin logout from the system.
    * GET /shop/admin/logout
    *
    * @return response
    */
    public function getLogout()
    {
        Auth::logout();
        return redirect()->action('ShopController@getLogin');
    }

}
