<?php

namespace App\Http\Livewire\Bestemming;

use App\Models\Accommodatie;
use http\Env\Request;
use Livewire\Component;
use App\Models\Bestemming;

class BestemmingWijzigen extends Component
{

    public Bestemming $bestemming;

    protected $rules = [
        'bestemming.accommodatie.ligging' => '',
        'bestemming.accommodatie.faciliteiten' => '',
        'bestemming.beschrijving' => '',
        'bestemming.prijs' => '',
    ];

    public function store(Request $request)
    {
        $this->validate();

        $this->bestemming->save();
    }

    public function mount(Bestemming $bestemming)
    {
        if($bestemming) {
            $this->bestemming = $bestemming;
        } else {
            $this->bestemming = new Bestemming;
        }
    }

    public function render()
    {
        $accommodatie = Accommodatie::where('idbestemming', '=', $this->bestemming->idbestemming)->get();

        return view('livewire.bestemming.bestemming-wijzigen', [
            'accommodatie' => $accommodatie,
        ]);
    }
}
