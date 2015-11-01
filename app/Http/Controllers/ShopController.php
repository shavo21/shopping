<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
        $data=[
            'bodyClass' => 'login-layout'
        ];
        return view('shop-admin.login',$data);
    }

    public function postLogin()
    {
        
    }

}
