<?php

namespace App\Http\Livewire\Bestemming;

use Livewire\Component;
use App\Models\Bestemming;

class BestemmingReserveren extends Component
{
    public Bestemming $bestemming;

    public function render()
    {
        return view('livewire.bestemming.bestemming-reserveren');
    }
}
