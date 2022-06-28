<?php

namespace App\Http\Livewire\Reis;

use App\Models\Land;
use App\Models\Reis;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ReisWijzigen extends Component
{
    public Reis $reis;
    public $landenlijst;

    protected $rules = [
        'reis.naamreis' => 'required',
        'reis.idland' => 'required',
        'reis.prijs' => 'required|numeric',
        'reis.startdatum' => 'required',
        'reis.einddatum' => 'required',
        'reis.beschrijving' => '',
    ];

    public function opslaan()
    {
        $this->validate();
        $this->reis->save();

        session()->flash('reisVeranderd', 'De reis is succesvol aangemaakt of aangepast!');

        $id = $this->reis->idreis;
        return redirect("reis/bekijken/".$id);
    }

    public function verwijder()
    {
        $this->reis->delete();

        session()->flash('reisVerwijderd', 'De reis is succesvol verwijderd!');

        return redirect('/reis');
    }

    public function mount(Reis $reis)
    {
        $this->landenlijst = Land::orderBy('land', 'ASC')->get();

        if($reis) {
            $this->reis = $reis;
        } else {
            $this->reis = new $reis;
        }
    }

    public function render()
    {
        return view('livewire.reis.reis-wijzigen');
    }
}
