<?php

namespace App\Http\Controllers\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\sold;
class Dashboard extends Component
{

    use WithPagination;
    public function render()
    {


         $solds=Sold::latest()->paginate(10);
        return view('admin.dashboard',compact('solds'))->extends('layouts.master');
    }
}
