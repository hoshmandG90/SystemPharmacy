<?php

namespace App\Http\Controllers\Pages;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;

class Register extends Component
{

    use WithFileUploads;

    public $username;
    public $name;
    public $email;
    public $password;
    public $passwordConfirmation;
    public $avatars;


    public function updated($Field){
        $this->validateOnly($Field,[
            'username' => 'required|unique:users|alpha_dash|max:10|min:4',
            'name' => 'required|string|max:50',
            'email' => 'required|email',
            'password' => 'required|max:25|min:8|same:passwordConfirmation',
            'avatars' => 'image|max:8000'
        ]);
    }
    public function register(){
        $this->Validate([
         'username' => 'required|unique:users|alpha_dash|max:10|min:4',
         'name' => 'required|string|max:50|',
         'email' => 'required|email',
         'password' => 'required|max:25|min:8|same:passwordConfirmation',
         'avatars' => 'image|max:8000'

        ]);

        // Get the File And store the File
        $GetFileUpload=\Str::random(10).'.'.$this->avatars->getClientOriginalExtension();
        $this->avatars->storeAs('Photos',$GetFileUpload,'Hosts');

        User::create([
            'username' =>$this->username,
            'name' =>$this->name,
            'email' =>$this->email,
            'password' =>$this->password,
            'avatars'=>$GetFileUpload,
            
        ]);
        


    }
    public function render()
    {
        return view('pages.register');
    }
}
