<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\MedicineController;
use App\Models\Medicine;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function welcome () {
    $medicines=Medicine::take(8)->get();
        return view('welcome')->with('medicines',$medicines);
    }
}
