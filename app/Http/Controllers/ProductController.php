<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Конструктор
    public function __construct()
    {
        // Только метод `index` требует аутентификации
        $this->middleware('auth')->only(['catalog']);
    }
    public function catalog(){
        $products = ProductModel::all();
        // dd($products);
        return view("catalog",compact("products" ));
    }
    public function add(){
        return view("add");
    }

    public function add_check(Request $request){
        // dd($request->all());
        $valid=$request->validate([
            'name'=>['required','min:4','max:100'],
            'price' => ['required', 'numeric', 'min:100', 'max:1000'],//число в диапазоне 100-1000
            'description'=>['required','min:10','max:100'],
        ]);

        $product=new ProductModel();
        $product->name=$request->name;
        $product->price=$request->price;
        $product->description=$request->description;
        
        $product->save();
        return redirect('/')->with('success','');
    
    }


    public function about(){
        return view("about");
    }
}
