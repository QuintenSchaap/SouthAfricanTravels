<?php

namespace App\Http\Livewire\Reis;

use App\Models\Reis;
use Livewire\Component;

class ReisWijzigen extends Component
{
    public Reis $reis;

    public function render()
    {
        return view('livewire.reis.reis-wijzigen');
    }
}
