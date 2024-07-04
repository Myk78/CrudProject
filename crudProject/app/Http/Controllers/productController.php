<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function store(){
        
    }
}
