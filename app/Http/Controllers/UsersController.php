<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\BaseController;
use App\Contracts\ProductInterface;
use App\Contracts\TypeInterface;

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
    * Render view user dashboard.
    * GET /dashboard
    *
    * @return view
    */
    public function getDashboard(ProductInterface $productRepo)
    {
        $slideProducts = $productRepo->getProductSlide(5);
        $newPriceProducts = $productRepo->getProductByPrice(2);
        $mainProducts = $productRepo->getProductSlide(6);
        $data = [
            'slideProducts' => $slideProducts,
            'newPriceProducts' => $newPriceProducts,
            'mainProducts' => $mainProducts
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
}
