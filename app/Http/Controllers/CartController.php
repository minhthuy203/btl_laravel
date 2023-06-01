<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\CartHelper;
use App\Models\Product;

class CartController extends Controller
{
    public function cart()
    {
    //  $pro = Product::all();
    
     return view('client.shopcart');
    }
    public function addToCart(CartHelper $cart, $id)
    {
        $product = Product::find($id);
        //truyền biến $product qua phương thức addToCart của CartHalper ddeer xử lí dữ liệu truyền vào
        $cart->addToCart($product);
        // dd(session('cart'));
        return redirect()->back();
    }
    public function remove(CartHelper $cart, $id)
    {
        $cart->remove($id);
        return redirect()->back();
    }
    public function update(CartHelper $cart, $id)
    {
        $quantity = request('quantity',1);
        $cart->update($id,$quantity);
        return redirect()->back();
    }
    public function clear(CartHelper $cart)
    {
        $cart->clear();
        return redirect()->back();
    }
}
