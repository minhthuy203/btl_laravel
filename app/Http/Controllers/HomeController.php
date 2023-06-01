<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Str;
class HomeController extends Controller
{
   public function index()
   {
    $pro = Product::all();
    return view('client.index');
   }
   

   public function productDetail(Product $product,$slug)
   {
    return view('client.productDetail');
   }

}
