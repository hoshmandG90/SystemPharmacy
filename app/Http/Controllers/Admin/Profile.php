<?php

namespace App\Http\Controllers\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;

class Profile extends Component
{

    use WithFileUploads;
    public $username;
    public $name;
    public $email;
    public $NewAvatar;
    public $password;
    public $passwordConfirmation;

    public $user;


    public function mount(User $user){
        $this->username = $user->username;
         $this->name = $user->name;
        $this->email = $user->email;
      $this->user = $user;

    }

    public function updated($Field){
        $this->validateOnly($Field,[
            'username' => 'required|alpha_dash|max:10|min:4|unique:users,username,'.$this->user->id,
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:users,email,'.$this->user->id,
            'password' => 'required|max:25|min:8|same:passwordConfirmation',
            'NewAvatar' => 'image|max:8000'
        ]);
    }
    public function EditUser(User $user){
        $this->Validate([
            'username' => 'required|alpha_dash|max:10|min:4|unique:users,username,'.$this->user->id,
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:users,email,'.$this->user->id,
            'password' => 'required|max:25|min:8|same:passwordConfirmation',
            'NewAvatar' => 'image|max:8000'
   
           ]);

           $GetFileUpload=\Str::random(10).'.'.$this->NewAvatar->getClientOriginalExtension();
           $this->NewAvatar->storeAs('Photos',$GetFileUpload,'Hosts');

           $this->user->update([
            'username'=>$this->username,
            'name'=>$this->name,
            'password'=>Hash::make($this->password),
            'avatars'=>$GetFileUpload,
            'email'=>$this->email,
        ]);
        notyf()->livewire()->position("y","top")->addInfo("successfully updated $user->name");


    }
    public function render()
    {
        return view('admin.profile')->extends('layouts.master');
    }
}
