<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Land;

class Landen extends Component
{

    public function render()
    {
        $landen = Land::where('idland', '!=', null)->get();

        return view('livewire.landen', [
            'landen' => $landen,
        ]);
    }
}
