<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function welcome () {
    $products=Product::take(8)->get();
        return view('welcome')->with('products',$products);
    }
}
