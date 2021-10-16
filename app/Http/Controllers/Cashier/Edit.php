<?php

namespace App\Http\Controllers\Cashier;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;

class Edit extends Component
{

    use WithFileUploads;

    public $user;

    
    public $username;
    public $name;
    public $email;
    public $password;
    public $passwordConfirmation;
    public $avatars;
    public $rules;
    public $NewAvatar;
    public function mount(User $user){
        $this->user = $user;
        $this->username = $user->username;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->rules = $user->rules;
        $this->avatars = $user->avatars;
    }

    public function EditUser(User $user){

       $this->Validate([
        'username' => 'required|alpha_dash|max:10|min:4|unique:users,username,'.$this->user->id,
        'name' => 'required|string|max:50|',
        'email' => 'required|email|unique:users,email,'.$this->user->id,
        'password' => 'required|max:25|min:8|same:passwordConfirmation',
        'rules' => 'required',
        'NewAvatar' => 'image|max:8000',

       ]);
        // Get the File And store the File
        $GetFileUpload=\Str::random(10).'.'.$this->NewAvatar->getClientOriginalExtension();
        $this->NewAvatar->storeAs('Photos',$GetFileUpload,'Hosts');

        $user->update([
            'username'=>$this->username,
            'name'=>$this->name,
            'rules' =>$this->rules,
            'email'=>$this->email,
            'avatars' =>$GetFileUpload,
            'password'=>Hash::make($this->password),
        ]);

        notyf()->livewire()->position('y','top')->addSuccess("the record has been updated");



    }

    public function render()
    {
        return view('cashier.edit')->extends('layouts.master');
    }
}
