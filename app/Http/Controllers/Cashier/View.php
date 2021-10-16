<?php

namespace App\Http\Controllers\Cashier;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class View extends Component
{
    use WithPagination;


    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function delete($UserId){
        $user = user::findorfail($UserId);        
        $img=unlink('uploads/Photos/'.$user->avatars);
        User::where('id',$user->id)->delete();
        Notyf()->livewire()->position('y','top')->addError("the $user->name is deleted");
        return back();

    }

 
    public function render()
    {
        $Users=User::latest()->Paginate(2);
        return view('cashier.view',compact('Users'))->extends('layouts.master');
    }
}
