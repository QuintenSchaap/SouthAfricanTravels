<div style="margin: 50px">
    @if (session()->has('reisVerwijderd'))
    <div class="alert alert-danger" id="verwijderbericht" style="margin-top: -25px; margin-bottom: 30px">
        {{ session('reisVerwijderd') }}
    </div>
    @endif
    <div class="form-row" style="margin-top: -20px">
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
        @auth
        <div class="form-group col-md-1" style="margin-top: 33px; margin-left: 30px">
            <a class="btn btn-secondary" style="color: white;" href="/reis/nieuw"> Nieuwe reis aanmaken</a>
        </div>
        @endauth
    </div>
    @foreach($reizen as $reis)
    <div class="card border-secondary" style="margin-top: 10px; height: 250px;">
        <div class="row">
            <div class="col">
                @if (File::exists("images/reis/$reis->naamreis.jpg"))
                <img class="rounded border border-dark card-img" src='{{ URL::asset("images/reis/$reis->naamreis.jpg") }}' alt="Foto laden mislukt" style="height: 200px; width: 350px; margin: 25px">
                @else
                <img class="rounded border border-dark card-img" src='{{ URL::asset("images/reis/standaard.jpg") }}' alt="Foto laden mislukt" style="height: 200px; width: 350px; margin: 25px">
                @endif
            </div>
            <div class="col-xl-8 mt-4">
                <a style="text-decoration: none" href="/reis/bekijken/{{ $reis->idreis }}">
                    <h4 style="margin-bottom: 0px" class="text-dark fw-bold">{{ $reis->naamreis }}</h4>
                </a>
                <p class="card-text" style="font-size: 14px;">Van {{ $reis->startdatum }} tot {{ $reis->einddatum }}</p>
                <p class="card-text mt-2" style="font-size: 14px;">€ {{ $reis->prijs }},- p.p</p>
                <a class="text-dark text-decoration-none" style="text-decoration: none; " href="/reis/bekijken/{{ $reis->idreis }}">
                    <p class="card-text mt-1 text-decoration-none" style="font-size: 14px; max-width:750px; word-wrap:break-word">{!!Str::limit($reis->beschrijving, 300, $end=' Lees meer..')!!}</p>
                </a>
                <p class="card-text mt-3" style="margin-bottom: -10px; font-size: 14px">{{ $reis->land->land }}</p>
            </div>
        </div>
        </a>
        @endforeach
        <div class="mt-2 mb-4">
            {{ $reizen->links() }}
        </div>
    </div>
    <div style="margin-bottom: 100px"><p></p></div>
</div>
<footer style="visibility: hidden">
