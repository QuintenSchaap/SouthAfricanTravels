<?php

namespace App\Http\Livewire\Bestemming;

use App\Models\Accommodatie;
use App\Models\Bestemming;
use Livewire\Component;

class BestemmingBekijken extends Component
{
    public Bestemming $bestemming;

    public function render()
    {
        $accommodatie = Accommodatie::where('idbestemming', '=', $this->bestemming->idbestemming)->get();

        return view('livewire.bestemming.bestemming-bekijken', [
            'accommodatie' => $accommodatie,
            ]);
    }
}
