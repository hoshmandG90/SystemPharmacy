<?php

namespace App\Http\Controllers\Pages;

use Livewire\Component;
use App\Models\User;

class Login extends Component
{



    public $username;
    public $password;

    public $check=null;


    public function updated($Field){
        $this->ValidateOnly($Field,[
            'username' => 'required',
            'password' => 'required|min:8'
        ]);
    }
    public function Login(){
     
        $this->Validate([
              'username' => 'required',
              'password' => 'required|min:8'
        ]);

        if(\Auth::attempt(['username' => $this->username, 'password' => $this->password])){

            return redirect()->to(route('Cashier'));
        }else{
          $this->check="the username and password dose not match";
        }
    }
    public function render()
    {
        return view('pages.login')->extends('layouts.base');
    }
}
