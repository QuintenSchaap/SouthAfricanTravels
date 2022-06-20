<?php

namespace App\Http\Livewire\Accommodatie;

use App\Models\Accommodatie;
use App\Models\Bestemming;
use Livewire\Component;

class AccommodatieBekijken extends Component
{
    public Bestemming $bestemming;

    public function render()
    {
        $accommodatie = Accommodatie::where('idbestemming', '=', $this->bestemming->idbestemming)->get();

        return view('livewire.accommodatie.accommodatie-bekijken', [
            'accommodatie' => $accommodatie,
            ]);
    }
}
