<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contracts\TypeInterface;
use Validator;

class ProductController extends Controller
{
    public function getTypes(TypeInterface $typeRepo)
    {
        $types = $typeRepo->getAll();
        dd($types);
    }

    public function getAddType()
    {
        $data=[
            'bodyClass' => 'skin-3 no-skin',
            'action' => 'add'
        ];
        return view('admin.type.add-edit-type',$data);
    }

    public function postAddType(Request $request,TypeInterface $typeRepo)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'name' => 'required|unique:types',
        ]);
        if($validator->fails()){
            return redirect()->back()->with(['error_danger'=> trans('common.error_type')]);
        };
        $result = $typeRepo->create($data);
        return redirect()->action('ProductController@getTypes');
    }

    public function getEditType($id,TypeInterface $typeRepo)
    {
        
    }

    public function putEditType($id,TypeInterface $typeRepo)
    {

    }

    public function getRemove($id,TypeInterface $typeRepo)
    {

    }

    public function getProducts(ProductInterface $productRepo)
    {

    }

    public function getAddProduct(TypeInterface $typeRepo)
    {

    }

    public function postAddProduct(ProductInterface $productRepo)
    {

    }

    public function getEditProduct($id,ProductInterface $productRepo,TypeInterface $typeRepo)
    {

    }

    public function putEditProduct($id,ProductInterface $productRepo,TypeInterface $typeRepo)
    {

    }

    public function getRemoveProduct($id,ProductInterface $productRepo)
    {
        
    }
}
