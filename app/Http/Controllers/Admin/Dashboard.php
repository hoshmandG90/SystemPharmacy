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



    public function DeleteRow($id){
        sold::FindOrFail($id)->delete();
        notyf()->livewire()->position('y','top')->addError("the row has been deleted");
        return back();

    }
    public function render()
    {


         $solds=Sold::where('clean',true)->latest()->paginate(10);
         // Get All Quantity between Yesterday and Toady
         $AllQuantity=sold::where('clean',true)->sum('quantity');
         $AllQuantityToday=sold::whereBetween('created_at',[now()->today(),now()])->sum('quantity');
        

         // Get unique Cashier
         $Cashier =sold::all();
         $uniqueCasiher=$Cashier->where('clean',true)->unique('user_id')->count();
         

         



         $Expire_count=Stock::where('expire_date','<=',Carbon::Today())->count();
      

         
      
           // The sum of all the money that is in the store
           $sum_solds=sold::where('clean',true)->latest()->get();

           //  List all the items sold today

           $sum_solds_today=sold::where('clean',true)->whereBetween('created_at',[now()->today(),now()])->get();

         
      
        return view('admin.dashboard',compact('sum_solds_today','sum_solds','solds','AllQuantity','uniqueCasiher','Expire_count','AllQuantityToday'))->extends('layouts.master');
    }
}
