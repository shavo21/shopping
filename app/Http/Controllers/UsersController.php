<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
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
    * Render view for logging in the user.
    * GET /login
    *
    * @return view
    */
    public function getDashboard()
    {
        return view('public.dashboard');
    }

    /**
    * Render view for logging in the user.
    * GET /login
    *
    * @return view
    */
    public function getRegistration()
    {
        return view('public.registration');
    }

    /**
    * Render view for logging in the user.
    * GET /login
    *
    * @return view
    */
    public function getProducts($type)
    {
        $products = [
            '1' => 1,
            '2' => 2,
            '3' => 3,
            '4' => 4,
            '5' => 5,
            '6' => 6,
            '7' => 7,
            '8' => 8,
            '9' => 9
        ];
        $data = [
            'products' => $products,
            'type' => $type
        ];
        return view('public.products',$data);
    }

    public function getProduct($type,$id)
    {
        $products = [
            '1' => 1,
            '2' => 2,
            '3' => 3,
            '4' => 4,
            '5' => 5,
            '6' => 6,
            '7' => 7,
            '8' => 8,
            '9' => 9
        ];
        $data = [
            'products' => $products,
            'type' => $type,
            'id' => $id
        ];
        return view('public.one-product',$data);
    }
}
