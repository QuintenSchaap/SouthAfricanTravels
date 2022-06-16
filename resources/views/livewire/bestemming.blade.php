<div style="margin: 50px">
    <div class="form-row" style="margin-top: -20px">
        <div class="form-group col-md-3" style="margin-top: 1px">
            <label>Bestemming:</label>
            <select class="form-control" wire:model="bestemmingFilter">
                <option value="0">-</option>
                @foreach ($bestemmingenlijst as $bestemminglijst)
                <option value="{{ $bestemminglijst->naambestemming }}">{{ $bestemminglijst->naambestemming }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-2" style="margin-top: 1px">
            <label>Prijs:</label>
            <select class="form-control" wire:model="prijsFilter">
                <option value="0">-</option>
                <option value="1">Minder dan € 500,- p.p</option>
                <option value="2">Minder dan € 1000,- p.p</option>
                <option value="3">Minder dan € 1500,- p.p</option>
                <option value="4">Minder dan € 2000,- p.p</option>
                <option value="5">Minder dan € 2500,- p.p</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label>Begin datum:</label>
            <div>
                <input type="date" class="form-control input-sm" id="datumVanaf" name="datumVanaf" wire:model="datumVanafFilter" required/>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label>Eind datum:</label>
            <div>
                <input type="date" class="form-control input-sm" id="datumTot" name="datumTot" wire:model="datumTotFilter" required/>
            </div>
        </div>
        <div class="form-group col-md-1" style="margin-top: 33px">
            <button class="btn btn-primary" wire:click="leegFilters">Filters leeghalen</button>
        </div>
    </div>
    @foreach($bestemmingen as $bestemming)
    <div class="card border-secondary" style="margin-top: 10px; height: 250px;">
        <div class="row">
            <div class="col">
                <img class="rounded border border-dark card-img" src='{{ URL::asset("images/bestemming/$bestemming->naambestemming.jpg") }}' style="height: 200px; width: 350px; margin: 25px">
            </div>
            <div class="col-xl-8 mt-4">
                <a style="text-decoration: none" href="/bestemming/bekijken/{{ $bestemming->idbestemming }}">
                    <h4 style="margin-bottom: 0px" class="text-dark fw-bold">{{ $bestemming->naambestemming }}</h4>
                </a>
                <a class="card-text" style="font-size: 14px;">Van {{ $bestemming->startdatum }} tot {{ $bestemming->einddatum }}</a>
                <p class="card-text mt-2" style="font-size: 14px;">€ {{ $bestemming->prijs }},- p.p</p>
                <a class="text-dark text-decoration-none" style="text-decoration: none; " href="/bestemming/bekijken/{{ $bestemming->idbestemming }}">
                    <p class="card-text mt-1 text-decoration-none" style="font-size: 14px; max-width:750px; word-wrap:break-word">{!!Str::limit($bestemming->beschrijving, 300, $end=' Lees meer..')!!}</p>
                </a>
                <p class="card-text mt-3" style="margin-bottom: -10px; font-size: 14px">{{ $bestemming->plaatsbestemming }}, {{ $bestemming->land->land }}</p>
            </div>
        </div>
        </a>
        @endforeach
        <div class="mt-2 mb-4">
            {{ $bestemmingen->links() }}
        </div>
    </div>
    <div style="margin-bottom: 100px"><p></p></div>
</div>
<footer style="visibility: hidden">

