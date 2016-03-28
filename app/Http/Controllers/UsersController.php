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
