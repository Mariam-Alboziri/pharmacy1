<?php

namespace App\Http\Controllers;

use App\Models\Mariam;
use Illuminate\Http\Request;

class MariamController extends Controller
{
    public function productList()
    {
        $products = Mariam::all();

        return view('products', compact('products'));
    }
}
