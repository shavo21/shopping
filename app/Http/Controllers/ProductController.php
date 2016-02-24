<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contracts\TypeInterface;
use Validator;

class ProductController extends Controller
{
    /**
    * Render types list view for admin.
    * GET /admin/types
    *
    * @param  TypeInterface $typeRepo
    * @return view
    */
    public function getTypes(TypeInterface $typeRepo)
    {
        $types = $typeRepo->getAll();
        $data = [
            'bodyClass' => 'skin-3 no-skin',
            'types' => $types
        ];
        return view('admin.type.types',$data);
    }

    /**
    * Render view for adding the type.
    * GET /admin/add-type
    *
    * @return view
    */
    public function getAddType()
    {
        $data=[
            'bodyClass' => 'skin-3 no-skin',
            'action' => 'add'
        ];
        return view('admin.type.add-edit-type',$data);
    }

    /**
    * Add new type.
    * POST /admin/add-type
    *
    * @param  Request $request
    * @param  TypeInterface $typeRepo
    * @return response
    */
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

    /**
    * Render view for type editing.
    * GET /admin/edit-type/{id}
    *
    * @param  integer $id
    * @param  TypeInterface $typeRepo
    * @return view
    */
    public function getEditType($id,TypeInterface $typeRepo)
    {
        $type = $typeRepo->getOne($id);
        $data = [
            'bodyClass' => 'skin-3 no-skin',
            'id' => $id,
            'type' => $type,
            'action' => 'edit'
        ];
        return view('admin.type.add-edit-type',$data);
    }

    /**
    * Edit a type.
    * PUT /admin/edit-type/{id}
    *
    * @param  integer $id
    * @param  TypeInterface $typeRepo
    * @return response
    */
    public function putEditType($id,TypeInterface $typeRepo)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'name' => 'required|unique:types'.$id,
        ]);
        if($validator->fails()){
            return redirect()->back()->with(['error_danger'=> trans('common.error_type')]);
        };
        $result = $typeRepo->update($id,$data);
        return redirect()->action('ProductController@getTypes');
    }

    /**
    * Delete a type.
    * GET /admin/remove-type/{id}
    *
    * @param  integer $id
    * @param  TypeInterface $typeRepo
    * @return response
    */
    public function getRemove($id,TypeInterface $typeRepo)
    {
        $result = $typeRepo->remove($id);
        return redirect()->back();
    }

    /**
    * Render products list view for admin.
    * GET /admin/products
    *
    * @param  ProductInterface $productRepo
    * @return view
    */
    public function getProducts(ProductInterface $productRepo)
    {
        $products = $productRepo->getAll();
        $data = [
            'bodyClass' => 'skin-3 no-skin',
            'products' => $products
        ];
        return view('admin.product.products',$data);
    }

    /**
    * Render view for adding the product.
    * GET /admin/add-product
    *
    * @param  TypeInterface $typeRepo
    * @return view
    */
    public function getAddProduct(TypeInterface $typeRepo)
    {
        $types = $typeRepo->getList();
        $typeData = [];
        foreach ($types as $type){
            $typeData[$type->id] = $type->name;
        }
        $data=[
            'bodyClass' => 'skin-3 no-skin',
            'action' => 'add',
            'types' => $typeData
        ];
        return view('admin.product.add-edit-product',$data);
    }

    /**
    * Add new product.
    * POST /admin/add-product
    *
    * @param  Request $request
    * @param  ProductInterface $productRepo
    * @return response
    */
    public function postAddProduct(Request $request,ProductInterface $productRepo)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'name' => 'required|unique:products',
            'count' => 'required|integer',
            'price' => 'required|integer',
        ]);
        if($validator->fails()){
            return redirect()->back()->with(['error_danger'=> trans('common.error_product')]);
        };
        $result = $productRepo->create($data);
        return redirect()->action('ProductController@getProducts');
    }

    /**
    * Render view for product editing.
    * GET /admin/edit-product/{id}
    *
    * @param  integer $id
    * @param  ProductInterface $productRepo
    * @param  TypeInterface $typeRepo
    * @return view
    */
    public function getEditProduct($id,ProductInterface $productRepo,TypeInterface $typeRepo)
    {
        $product = $productRepo->getOne($id);
        $types = $typeRepo->getList();
        $typeData = [];
        foreach ($types as $type){
            $typeData[$type->id] = $type->name;
        }
        $data=[
            'bodyClass' => 'skin-3 no-skin',
            'action' => 'edit',
            'types' => $typeData,
            'product' => $product
        ];
        return view('admin.product.add-edit-product',$data);
    }

    /**
    * Edit a product.
    * PUT /admin/edit-product/{id}
    *
    * @param  integer $id
    * @param  ProductInterface $productRepo
    * @param  TypeInterface $typeRepo
    * @return response
    */
    public function putEditProduct($id,ProductInterface $productRepo,TypeInterface $typeRepo)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'name' => 'required|unique:products'.$id,
            'count' => 'required|integer',
            'price' => 'required|integer',
        ]);
        if($validator->fails()){
            return redirect()->back()->with(['error_danger'=> trans('common.error_product')]);
        };
        $result = $productRepo->update($id,$data);
        return redirect()->action('ProductController@getProducts');
    }

    /**
    * Delete a product.
    * GET /admin/remove-product/{id}
    *
    * @param  integer $id
    * @param  ProductInterface $productRepo
    * @return response
    */
    public function getRemoveProduct($id,ProductInterface $productRepo)
    {
        $result = $productRepo->remove($id);
        return redirect()->back();
    }
}
