<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsRequest;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Products;
use Illuminate\Support\Facades\Session;

class productsController extends MainController
{

    public function index(){
        self::$data['products'] = Products::all()->toArray();
        return view('cms.products.products',self::$data);
    }


    public function create(){
        self::$data['categories'] = Categorie::all()->toArray();
        return view('cms.products.add_product',self::$data);

    }


    public function store(ProductsRequest $request){
        Products::save_new($request);
        return redirect('cms/products');

    }

    public function show($id){
        self::$data['id'] = $id;
        return view('cms.products.delete_product',self::$data);

    }


    public function edit($id){

        self::$data['categories'] = Categorie::all()->toArray();
        self::$data['product'] = Products::find($id)->toArray();
        return view('cms.products.edit_product',self::$data);

    }

    public function update(ProductsRequest $request, $id){

        Products::update_item($request,$id);
        return redirect('cms/products');
    }

    public function destroy($id){
        Products::destroy($id);
        Session::flash('sm','Product Deleted..');
        return redirect('cms/products');

    }
}