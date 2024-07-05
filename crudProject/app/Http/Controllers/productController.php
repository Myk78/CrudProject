<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class productController extends Controller
{
    //this method will show products page
    public function index(){

    }

    //this method will create a products 
    public function create(){
        return view('product.create');
    }

    //this method will store the products 
    public function store(Request $request){
        $rules =[
            'name' => 'required|min:5',
            'sku' => 'required|min:3',
            'price' => 'required|numeric',
            'description' => 'required|min:500'
        ];

        $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect()->route('product.create')->withInput()->withErrors($validator);
        }
        
    }
}
