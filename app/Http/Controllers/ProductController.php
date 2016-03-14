<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contracts\TypeInterface;
use App\Contracts\ProductInterface;
use Validator;

class ProductController extends Controller
{
    /**
     * Create a new instance of WebsitesController class.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['getLogin', 'postLogin']]);
    }
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
            'types' => $types,
            'product' => true
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
        $data = [
            'bodyClass' => 'skin-3 no-skin',
            'action' => 'add',
            'product' => true
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
            return redirect()->back();
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
            'action' => 'edit',
            'product' => true
        ];
        return view('admin.type.add-edit-type',$data);
    }

    /**
    * Edit a type.
    * PUT /admin/edit-type/{id}
    *
    * @param  integer $id
    * @param  TypeInterface $typeRepo
    * @param  Request $request
    * @return response
    */
    public function putEditType($id,TypeInterface $typeRepo,Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'name' => 'required|unique:types,name,'.$id,
        ]);
        if($validator->fails()){
            return redirect()->back()->with(['error_danger'=> trans('common.error_type')]);
        };
        $result = $typeRepo->update($data,$id);
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
    public function getRemoveType($id,TypeInterface $typeRepo)
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
            'products' => $products,
            'product' => true
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
            'types' => $typeData,
            'product' => true
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
            'name' => 'required',
            'count' => 'required|integer',
            'price' => 'required|integer',
            'product_picture1' => 'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->with(['error_danger'=> trans('common.error_product')]);
        };
        $path = public_path() . '/uploads/images/products/';
        $name1 = str_random();
        $logoFile1 = $request->file('product_picture1')->getClientOriginalExtension();
        $result = $request->file('product_picture1')->move($path, $name1.'.'.$logoFile1);
        $data['product_picture1'] = $name1.'.'.$logoFile1;
        if($data['product_picture2'] != ""){
            $name2 = str_random();
            $logoFile2 = $request->file('product_picture2')->getClientOriginalExtension();
            $result = $request->file('product_picture2')->move($path, $name2.'.'.$logoFile2);
            $data['product_picture2'] = $name2.'.'.$logoFile1;
        }
        if($data['product_picture3'] != ""){
            $name3 = str_random();
            $logoFile3 = $request->file('product_picture3')->getClientOriginalExtension();
            $result = $request->file('product_picture3')->move($path, $name3.'.'.$logoFile3);
            $data['product_picture3'] = $name3.'.'.$logoFile1;
        }
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
            'productData' => $product,
            'product' => true,
            'id' => $id
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
    * @param  Request $request
    * @return response
    */
    public function putEditProduct($id,ProductInterface $productRepo,TypeInterface $typeRepo,Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'name' => 'required|unique:products,name,'.$id,
            'count' => 'required|integer',
            'price' => 'required|integer',
        ]);
        if($validator->fails()){
            return redirect()->back()->with(['error_danger'=> trans('common.error_product')]);
        };
        $path = public_path() . '/uploads/images/products/';
        if(isset($data['product_picture1'])){
            $name1 = str_random();
            $logoFile1 = $request->file('product_picture1')->getClientOriginalExtension();
            $result = $request->file('product_picture1')->move($path, $name1.'.'.$logoFile1);
            $data['product_picture1'] = $name1.'.'.$logoFile1;
        }
        if(isset($data['product_picture2'])){
            $name2 = str_random();
            $logoFile2 = $request->file('product_picture2')->getClientOriginalExtension();
            $result = $request->file('product_picture2')->move($path, $name2.'.'.$logoFile2);
            $data['product_picture2'] = $name2.'.'.$logoFile1;
        }
        if(isset($data['product_picture3'])){
            $name3 = str_random();
            $logoFile3 = $request->file('product_picture3')->getClientOriginalExtension();
            $result = $request->file('product_picture3')->move($path, $name3.'.'.$logoFile3);
            $data['product_picture3'] = $name3.'.'.$logoFile1;
        }
        $result = $productRepo->update($data,$id);
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
