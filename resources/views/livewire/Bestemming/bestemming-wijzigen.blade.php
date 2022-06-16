<style>
    td {
        max-width:750px;
        word-wrap:break-word
    }
</style>
<form class="form" wire:submit.prevent="store">
<div style="margin: 50px">
    <div class="card border-dark mb-3">
        <b><div class="card-header">{{ $bestemming->naambestemming }}</div></b>
        <div class="card-body text-dark">
            <table class="table table-bordered" style="padding: 25px; width:100%; font-size: 15px">
                <tbody>
                <tr>
                    <th scope="col">Locatie</th>
                    <td>{{ $bestemming->plaatsbestemming }}, {{ $bestemming->land->land  }}</td>
                </tr>
                <tr>
                    @foreach ($accommodatie as $accommodaties)
                    <th scope="col">Soort</th>
                    <td>{{ $accommodaties->soort }}</td>
                </tr>
                <tr>
                    <th scope="col">Periode</th>
                    <td>Van {{ $bestemming->startdatum }} tot {{ $bestemming->einddatum }}</td>
                </tr>
                <tr>
                    <th scope="col">Prijs p.p</th>
                    <td>
                        <div class="form-label-group">
                            <input type="text" class="form-control" wire:model="bestemming.prijs" placeholder="Prijs"/>
                            @error('bestemming.prijs') <span class="text-red-500 text-xs" style="color: red;">{{ $message }}</span>@enderror
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col">Aantal kamers</th>
                    <td>{{ $accommodaties->aantalkamers }}</td>
                </tr>
                <tr>
                    <th scope="col">Aantal personen</th>
                    <td>{{ $accommodaties->aantalpersonen }}</td>
                </tr>
                <tr>
                    <th scope="col">Ligging</th>
                    <td>
                        <div class="form-label-group">
                            <input type="text" class="form-control" wire:model="bestemming.accommodatie.ligging" placeholder="Ligging"/>
                            @error('bestemming.accommodatie.ligging') <span class="text-red-500 text-xs" style="color: red;">{{ $message }}</span>@enderror
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col">Faciliteiten</th>
                    <td>
                        <div class="form-label-group">
                            <input type="text" class="form-control" wire:model="bestemming.accommodatie.faciliteiten" placeholder="Faciliteiten"/>
                            @error('bestemming.accommodatie.ligging') <span class="text-red-500 text-xs" style="color: red;">{{ $message }}</span>@enderror
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col">Beschrijving</th>
                    <td>
                        <div class="form-label-group">
                            <input type="text" class="form-control" wire:model="bestemming.beschrijving" placeholder="Beschrijving"/>
                            @error('bestemming.beschrijving') <span class="text-red-500 text-xs" style="color: red;">{{ $message }}</span>@enderror
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col">Foto</th>
                    <td><img src='{{ URL::asset("images/bestemming/$bestemming->naambestemming.jpg") }}'></td>
                    @endforeach
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <a class="btn btn-secondary" style="color: white;" href="/bestemming/bekijken/{{ $bestemming->idbestemming }}"><i class="fa-solid fa-arrow-left"></i> Terug</a>
    <button class="btn btn-primary" type="submit">Opslaan</button>
</div>
</form>
