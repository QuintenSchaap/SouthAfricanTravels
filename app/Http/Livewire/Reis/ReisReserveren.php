<?php

namespace App\Http\Livewire\Reis;

use Livewire\Component;
use App\Models\Reis;

class ReisReserveren extends Component
{
    public Reis $reis;

    public function render()
    {
        return view('livewire.reis.reis-reserveren');
    }
}
