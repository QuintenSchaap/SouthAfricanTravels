<style>
    td {
        max-width:750px;
        word-wrap:break-word
    }
</style>
<form class="form" wire:submit.prevent="store">
<div style="margin: 50px">
    <div class="card border-dark mb-3">
        <b><div class="card-header">{{ $reis->naamreis }}</div></b>
        <div class="card-body text-dark">
            <table class="table table-bordered" style="padding: 25px; width:100%; font-size: 15px">
                <tbody>
                <tr>
                    <th scope="col">Naam</th>
                    <td>{{ $reis->naamreis }}</td>
                </tr>
                <tr>
                    <th scope="col">Locatie</th>
                    <td>{{ $reis->land->land }}</td>
                </tr>
                <tr>
                    <th scope="col">Prijs p.p</th>
                    <td>
                        <div class="form-label-group">
                            <input type="text" class="form-control" wire:model="reis.prijs" placeholder="Prijs"/>
                            @error('reis.prijs') <span class="text-red-500 text-xs" style="color: red;">{{ $message }}</span>@enderror
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col">Periode</th>
                    <td>Van {{ $reis->startdatum }} tot {{ $reis->einddatum }}</td>
                </tr>
                <tr>
                    <th scope="col">Beschrijving</th>
                    <td>
                        <div class="form-label-group">
                            <input type="text" class="form-control" wire:model="reis.beschrijving" placeholder="Beschrijving"/>
                            @error('reis.beschrijving') <span class="text-red-500 text-xs" style="color: red;">{{ $message }}</span>@enderror
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col">Foto</th>
                    <td><img src='{{ URL::asset("images/reis/$reis->naamreis.jpg") }}' style="height: 400px; width: 650px"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <a class="btn btn-secondary" style="color: white;" href="/reis/bekijken/{{ $reis->idreis }}"><i class="fa-solid fa-arrow-left"></i> Terug</a>
    <button class="btn btn-primary" type="submit">Opslaan</button>
</div>
</form>
