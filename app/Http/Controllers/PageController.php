<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Request;
use App\Product;

class PageController extends Controller
{
    public function index(){
        $products = Product::all();
        dd($products);
        return view('welcome')->with(['products' => $products]);
    }
}
