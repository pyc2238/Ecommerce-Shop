<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products_model;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products_model::all();

        return view('front.home',compact('products'));
    }

    public function shop(){
        $products = Products_model::all();

        return view('front.shop',compact('products'));
    }

    public function showCates($id){
      
        $category_products = Products_model::where('category_id',$id)->get();
        $id_ = $id;
        return view('front.category_list_pro',compact('category_products','id_'));
    }
}
