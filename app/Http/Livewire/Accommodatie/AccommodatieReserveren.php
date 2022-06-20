<?php

namespace App\Http\Livewire\Accommodatie;

use Livewire\Component;
use App\Models\Bestemming;

class AccommodatieReserveren extends Component
{
    public Bestemming $bestemming;

    public function render()
    {
        return view('livewire.accommodatie.accommodatie-reserveren');
    }
}
