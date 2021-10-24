<?php

namespace App\Http\Controllers\Notifications;

use Livewire\Component;
use App\Models\stock;

class NotLeft extends Component
{

    public $notLeft;
    public function mount(){

        $this->notLeft =stock::where('count','<',3)->count();
        
    }
    public function render()
    {
        return view('notifications.not-left');
    }
}
