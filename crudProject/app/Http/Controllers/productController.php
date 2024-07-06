<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
// use Illuminate\Database\
// use Illuminate\Database\Eloquent\Product;
use App\Models\Product; 


class productController extends Controller
{
    //this method will show products page
    public function index(){
        $product = Product::orderBy('created_at','DESC')->get();
        return view('product.index',['product' => $product]);
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
        ];

        if ($request->image != "") {
            $rules['image'] = 'image';
            
        }

        $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect()->route('product.create')->withInput()->withErrors($validator);
        }

        // here we will store data
        $product = new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->description;

        $product->save();

        if ($request->image != "") {
            // here we save the image
        $image = $request->image;
        $ext = $image->getClientOriginalExtension();
        $imageName = time().'.'.$ext;  //Unique image name
        
        //save Image to products directory in public folder
        $image->move(public_path('uploads/products'),$imageName);

        //Save Image name in database
        $product->image = $imageName;
        $product->save();
        }
        
        return redirect()->route('product.index')->with('success','Product add successfull');
        
    }

        //this method will show the products edit page
        public function edit($id){
            $pro = Product::findOrFail($id);
            return view('product.edit',compact('pro'));
        } 



        //this method will update the products 
        public function Update($id, Request $request){

            $product = Product::findOrFail($id);
            $rules =[
                'name' => 'required|min:5',
                'sku' => 'required|min:3',
                'price' => 'required|numeric',
            ];
    
            if ($request->image != "") {
                $rules['image'] = 'image';
                
            }
            
    
            $validator = Validator::make($request->all(),$rules);
    
            if ($validator->fails()) {
                return redirect()->route('product.edit',$product->id)->withInput()->withErrors($validator);
            }
    
            // here we will store data
            $product->name = $request->name;
            $product->sku = $request->sku;
            $product->price = $request->price;
            $product->description = $request->description;
    
            $product->save();
    
            if ($request->image != "") {

                // remove the previous image if user change the image so
                File::delete(public_path('uploads/products'.$product->image));


                // here we save the image
                $image = $request->image;
                $ext = $image->getClientOriginalExtension();
                $imageName = time().'.'.$ext;  //Unique image name
            
                //save Image to products directory in public folder
                $image->move(public_path('uploads/products'),$imageName);
        
                //Save Image name in database
                $product->image = $imageName;
                $product->save();
                return redirect()->route('product.index')->with('success','Product update successfull');

        }

}
}
