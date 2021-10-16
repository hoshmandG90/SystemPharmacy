<?php

namespace App\Http\Controllers\Cashier;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;

class Create extends Component
{


    use WithFileUploads;
    public $username;
    public $name;
    public $email;
    public $password;
    public $passwordConfirmation;
    public $avatars;
    public $rules;



    public function store(){
        $this->Validate([
            'username' => 'required|unique:users|alpha_dash|max:10|min:4',
            'name' => 'required|string|max:50|',
            'email' => 'required|email|unique:users|',
            'password' => 'required|max:25|min:8|same:passwordConfirmation',
            'rules' => 'required',
            'avatars' => 'image|max:8000'
   
           ]);  


            // Get the File And store the File
        $GetFileUpload=\Str::random(10).'.'.$this->avatars->getClientOriginalExtension();
        $this->avatars->storeAs('Photos',$GetFileUpload,'Hosts');

        User::create([
            'username' =>$this->username,
            'name' =>$this->name,
            'password' =>Hash::make($this->password),
            'email' =>$this->email,
            'rules' =>$this->rules,
            'avatars' =>$GetFileUpload
        ]);
        notyf()->livewire()->position('y','top')->addsuccess('created account successfully');
        $this->clear();
        
       
        }

        private function clear(){
            // this is For clear All Input After The submit Forms
            $this->avatars='';
            $this->password='';
            $this->passwordConfirmation='';
            $this->name='';
            $this->email='';
            $this->username='';
            $this->rules='';
        }
    public function render()
    {
        return view('cashier.create')->extends('layouts.master');
    }
}
