<?php

namespace App\Http\Controllers\Notifications;

use Livewire\Component;
use App\Models\Stock;
class Debt extends Component
{
    public $debt_list;

    public function mount(){
        $this->debt_list =Stock::where('is_debt',true)->count();
    }
    public function render()
    {
        return view('notifications.debt');
    }
}
