<?php

namespace App\Http\Controllers\Admin;

use Livewire\Component;

use Livewire\WithPagination;
use App\Models\sold;
use Illuminate\support\Carbon;
use App\Models\Stock;
class Notifications extends Component
{
    use WithPagination;

   
    public function render()
    {

        // The sum of all the money that is in the store
        $solds=sold::where('clean',true)->latest()->get();

        // The total amount displays today
        $sold_today=sold::where('clean',true)->whereBetween('created_at',[now()->today(), now()])->get();
      

        // List All of Cashier With Unique Id
        $cashier=sold::all();
        $UniqueCasiher=$cashier->where('clean',true)->unique('user_id')->count();

        // Receiving the materials that are sourced 
        $Expire_count=Stock::where('expire_date','<',Carbon::today())->count();

        // A list of all the items sold
        $items_sold=sold::where('clean',true)->sum('quantity');
    
        // List all the items sold today
        $items_sold_today=sold::whereBetween('created_at',[now()->today(),now()])->sum('quantity');
      

        // The sum of all the money that is in the Stock

        $stock_amount=stock::where('expire_date','>=',carbon::today())->sum('count');
     

        $quantity_amount=stock::where('expire_date','<=',carbon::today())->latest()->get();
    

    


        
       
        return view('admin.notifications',compact('stock_amount','sold_today','solds','UniqueCasiher','Expire_count','items_sold','items_sold_today','quantity_amount'))->extends('layouts.master');
    }
}
