<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Bestemming;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class Bestemmingen extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;

    public $bestemmingenlijst;
    public $prijzen;

    public $bestemmingFilter = 0;
    public $datumVanafFilter = 0;
    public $datumTotFilter = 0;
    public $prijsFilter = 0;

    public function mount()
    {
        $this->bestemmingenlijst = Bestemming::orderBy('naambestemming', 'ASC')->get();
        $this->prijzen = Bestemming::orderBy('prijs', 'ASC')->get();
    }

    public function leegFilters()
    {
        $this->bgit clone git aestemmingFilter = 0;
        $this->datumVanafFilter = 0;
        $this->datumTotFilter = 0;
        $this->prijsFilter = 0;
        $this->search = '';
    }


    public function render()
    {
        $search = '%'.$this->search.'%';

        $bestemmingen = Bestemming::query()->where([['naambestemming', 'LIKE', '%' . $this->search . '%'],])
            ->when($this->bestemmingFilter != 0, function (Builder $query): Builder {
                return $query->where('naambestemming', $this->bestemmingFilter);
            })->when($this->datumVanafFilter != 0, function (Builder $query): Builder {
                return $query->where('startdatum', '>=', $this->datumVanafFilter);
            })->when($this->datumTotFilter != 0, function (Builder $query): Builder {
                return $query->where('einddatum', '<=', $this->datumTotFilter);
            })->when($this->prijsFilter == 1, function (Builder $query): Builder {
                return $query->where('prijs', '<=', 500);
            })->when($this->prijsFilter == 2, function (Builder $query): Builder {
                return $query->where('prijs', '<=', 1000);
            })->when($this->prijsFilter == 3, function (Builder $query): Builder {
                return $query->where('prijs', '<=', 1500);
            })->when($this->prijsFilter == 4, function (Builder $query): Builder {
                return $query->where('prijs', '<=', 2000);
            })->when($this->prijsFilter == 5, function (Builder $query): Builder {
                return $query->where('prijs', '<=', 2500);
            })->orderBy('idbestemming', 'DESC')->paginate(5);

        return view('livewire.bestemming', [
            'bestemmingen' => $bestemmingen,
        ]);
    }
}
