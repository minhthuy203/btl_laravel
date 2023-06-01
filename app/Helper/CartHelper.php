<?php

namespace App\Helper;
class Carthelper
{
    public $items = [];
    public $totalQuantity = 0;
    public $totalPrice = 0;
    
    public function __construct(){
        $this->items = session('cart') ? session('cart') : [];
        $this->totalPrice = $this->getTotalPrice();
        $this->totalQuantity = $this->getTotalQuantity();
    }
    public function addToCart($product, $quantity=1)
    {
        $item = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->sale_price > 0 ? $product->sale_price : $product->price,
            'image' => $product->image,
            'quantity' => $quantity,
        ];
        if (isset($this->items[$product->id])) {
            $this->items[$product->id]['quantity'] += $quantity;
        }else{
            $this->items[$product->id] = $item;
        }
        session(['cart'=> $this->items]);
        // dd($this->items);
    }
    public function remove($id)
    {
        if (isset($this->items[$id])) {
            unset($this->items[$id]);
        }
        session(['cart'=> $this->items]);
    }
    public function update($id, $quantity)
    {
        $quantity = $quantity > 0 ? (int)$quantity : 1;
        if (isset($this->items[$id])) {
            $this->items[$id]['quantity'] = $quantity;
        } 
        session(['cart'=> $this->items]);
    }
    public function clear()
    {
        session(['cart'=> '']);
    }

    // khong dung o ngoai chi dung cho cac total lay ve do vao contruct
    private function getTotalPrice(){
        $t = 0;
        foreach($this->items as $item){
            $t += $item['price']*$item['quantity'];
        }
        return $t;
    }
    private function getTotalQuantity(){
        $t = 0;
        foreach($this->items as $item){
            $t +=$item['quantity'];
        }
        return $t;
    }
}


?>