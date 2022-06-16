<?php

namespace App\Http\Livewire;

use App\Models\Reis;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class Reizen extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $datumVanafFilter = 0;
    public $datumTotFilter = 0;

    public function leegFilters()
    {
        $this->datumVanafFilter = 0;
        $this->datumTotFilter = 0;
    }

    public function render()
    {
        $reizen = Reis::query()->where('idreis', '!=', null)
            ->when($this->datumVanafFilter != 0, function (Builder $query): Builder {
            return $query->where('startdatum', '>=', $this->datumVanafFilter);
        })->when($this->datumTotFilter != 0, function (Builder $query): Builder {
            return $query->where('einddatum', '<=', $this->datumTotFilter);
        })->orderBy('idreis', 'DESC')->paginate(5);

        return view('livewire.reizen', [
            'reizen' => $reizen,
        ]);
    }
}
