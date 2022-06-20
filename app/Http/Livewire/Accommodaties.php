<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Bestemming;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class Accommodaties extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;

    public $accommodatieslijst;
    public $prijzen;

    public $accommodatieFilter = 0;
    public $datumVanafFilter = 0;
    public $datumTotFilter = 0;
    public $prijsFilter = 0;

    public function mount()
    {
        $this->accommodatieslijst = Bestemming::orderBy('naam', 'ASC')->get();
        $this->prijzen = Bestemming::orderBy('prijs', 'ASC')->get();
    }

    public function leegFilters()
    {
        $this->accommodatieFilter = 0;
        $this->datumVanafFilter = 0;
        $this->datumTotFilter = 0;
        $this->prijsFilter = 0;
        $this->search = '';
    }


    public function render()
    {
        $search = '%'.$this->search.'%';

        $bestemmingen = Bestemming::query()->where([['naam', 'LIKE', '%' . $this->search . '%'],])
            ->when($this->accommodatieFilter != 0, function (Builder $query): Builder {
                return $query->where('naam', $this->accommodatieFilter);
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

        return view('livewire.accommodatie.accommodatie', [
            'bestemmingen' => $bestemmingen,
        ]);
    }
}
