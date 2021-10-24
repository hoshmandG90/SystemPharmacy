<?php

namespace App\Http\Controllers;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Request;
use App\Models\sold;
Use App\Models\stock;
class ProductTable extends Component
{
    public $listeners = ['productSelected'];

    public $cart_instance;
    public $global_discount;
    public $global_tax;
    public $shipping;
    public $quantity;
    public $check_quantity;
    public $discount_type;
    public $item_discount;
    public $data;
  
    public $how_many;
    public function productSelected($product) {

        $this->how_many = $product;
    }

    public function delete($id){
         $find_sold=sold::FindOrFail($id);
         if($find_sold){
             $find_stock=stock::FindOrFail($find_sold->stock_id);
             if($find_stock){
                 // Count +1
                 $find_stock->count+=1;
                 $find_stock->save();
                 // And Quantity -1
                 if($find_sold->quantity == 1){
                   $find_sold->delete();
                 }else{
                    $find_sold->quantity-=1;
                    $find_sold->save();
                 }
                
             }
         }
         return redirect();

    }

    public function Plus($id){
        $find_sold=sold::FindOrFail($id);
        if($find_sold){
            $find_stock=stock::FindOrFail($find_sold->stock_id);
           if($find_stock){
               // Minus stock -1
               $find_stock->count-=1;
               $find_stock->save();

               // Plus stock +1
               $find_sold->quantity+=1;
               $find_sold->save();
           }
        }

    }
    

    public function Minus($id){
        $find_sold=sold::FindOrFail($id);
        if($find_sold){
            $find_stock=stock::FindOrFail($find_sold->stock_id);
            if($find_stock){

                // Plus stock +1
                $find_stock->count+=1;
                $find_stock->save();


                // Minus Sold -1
                if($find_sold->quantity == 1){
                   $find_sold->delete();
                }else{
                    $find_sold->quantity-=1;
                    $find_sold->save();
                }
              
            }
        }
    }
  
    public function mount() {
        $this->cart_items=sold::where('clean',false)->latest()->get();
        
    }
    public function render()
    {
        $this->cart_items=sold::where('clean',false)->latest()->get();

        return view('product-table')->extends('layouts.master');
    }
}
