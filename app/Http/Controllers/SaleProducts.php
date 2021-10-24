<?php

namespace App\Http\Controllers;

use Livewire\Component;
use Illuminate\Support\Collection;
use App\Models\sold;
use App\Models\Stock;
use Illuminate\support\Carbon;
use App\Models\invoices;
class SaleProducts extends Component
{

    public $query;
    public $search_results;
    public $how_many;

    public $check_error;

    public $Receipt_number;
    public function mount(){
        $this->query = '';
        $this->how_many = 1;
        $this->search_results = Collection::empty();
        $this->Receipt_number =invoices::orderBy('id','DESC')->first();

    }

  
    
  
 

    public function ReceiptRenewal(){
        invoices::create([
            'number' =>1
        ]);
        $find_sold=sold::where(['user_id'=>auth()->user()->id,'clean'=>false])->update(['clean'=>true]);
        $this->Receipt_number =invoices::orderBy('id','DESC')->first();
        notyf()->livewire()->position('y','top')->addSuccess("the receipt ordered successfully");
        return redirect()->to(route('SaleProducts'));

        
    }

    public function render(){
    return view('sale-products')->extends('layouts.master');
    }

    public function updatedQuery() {
        $this->search_results = Stock::where('name', 'like', '%' . $this->query . '%')
            ->orWhere('id', 'like', '%' . $this->query . '%')
            ->take($this->how_many)->get();

            
            foreach($this->search_results as $result){
               if($result->count !=0){
                   if($result->expire_date >= Carbon::today()){
                       $result->count=$result->count-1;
                       $result->save();
                       $find_sold=sold::where(['clean'=>false,'stock_id'=>$result->id])->first();
                       
                       if($find_sold == null){
                        Sold::create([
                            'user_id'=>auth()->user()->id,
                            'stock_id' =>$result->id,
                            'clean'=>false,
                            'price_at'=>$result->price,
                            'quantity'=>1
                        ]);
                       }else{
                           $find_sold->quantity = $find_sold->quantity+1;
                           $find_sold->save();
                       }
                   
                   }else{
                       $this->check_error="the product is expired";
                   }

               }else{
                   $this->check_error="the product is no longer available";
               }
            }
            return redirect()->to(route('SaleProducts'));

    }

 

    public function resetQuery() {
        $this->query = '';
        $this->how_many = 1;
        $this->search_results = Collection::empty();
        

    }

    public function selectProduct($product) {
        $this->emit('productSelected', $product);
    }

  
}
