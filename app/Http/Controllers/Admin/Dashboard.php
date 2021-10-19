<?php

namespace App\Http\Controllers\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\sold;
use Illuminate\support\Carbon;
use App\Models\Stock;
class Dashboard extends Component
{

    use WithPagination;
    public function render()
    {


         $solds=Sold::where('clean',true)->latest()->paginate(10);
         // Get All Quantity between Yesterday and Toady
         $AllQuantity=sold::where('clean',true)->sum('quantity');
         $AllQuantityToday=sold::whereBetween('created_at',[now()->today(),now()])->sum('quantity');
        

         // Get unique Cashier
         $Cashier =sold::all();
         $uniqueCasiher=$Cashier->where('clean',true)->unique('user_id')->count();
         

         $AllMoney=sold::where('clean',true)->sum('price_at');
         $AllMoneyToday=sold::whereBetween('created_at',[now()->today(),now()])->sum('price_at');



         $Expire_count=Stock::where('expire_date','<=',Carbon::Today())->count();
      

      
         
      
        return view('admin.dashboard',compact('solds','AllQuantity','uniqueCasiher','AllMoney','Expire_count','AllMoneyToday','AllQuantityToday'))->extends('layouts.master');
    }
}
