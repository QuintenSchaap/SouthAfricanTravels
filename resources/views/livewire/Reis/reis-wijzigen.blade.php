<div style="margin: 50px">
    <form class="form" wire:submit.prevent="opslaan">
        <div style="margin: 50px">
            <div class="card border-dark mb-3">
                @if ($reis->idreis != null)
                <b><div class="card-header">Reis bewerken</div></b>
                @else
                <b><div class="card-header">Reis aanmaken</div></b>
                @endif
                <div class="card-body text-dark">
                    <table class="table table-bordered" style="padding: 25px; width:100%; font-size: 15px">
                        <tbody>
                        <tr>
                            <th scope="col">Naam</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="naamreis" class="form-control" wire:model="reis.naamreis">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">Bestemming</th>
                            <td>
                                <div class="form-group">
                                    <select class="form-control" wire:model="reis.idland">
                                        <option value="0">-</option>
                                        @foreach ($landenlijst as $landlijst)
                                        <option value="{{ $landlijst->idland }}">{{ $landlijst->land }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">Prijs p.p</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="prijs" class="form-control" wire:model="reis.prijs">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">Startdatum</th>
                            <td>
                                <div class="form-group">
                                    <input type="date" name="startdatum" class="form-control" wire:model="reis.startdatum">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">Einddatum</th>
                            <td>
                                <div class="form-group">
                                    <input type="date" name="einddatum" class="form-control" wire:model="reis.einddatum">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">Beschrijving</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="beschrijving" class="form-control" wire:model="reis.beschrijving">
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @if ($reis->idreis != null)
            <a class="btn btn-secondary" style="color: white;" href="/reis/bekijken/{{ $reis->idreis }}"><i class="fa-solid fa-arrow-left"></i> Terug</a>
            @else
            <a class="btn btn-secondary" style="color: white;" href="/reis"><i class="fa-solid fa-arrow-left"></i> Terug</a>
            @endif
            <button class="btn btn-primary" type="submit">Opslaan</button>
            @if ($reis->idreis != null)
            <button class="btn btn-danger" type="button" wire:click="verwijder">Verwijder</button>
            @endif
        </div>
    </form>
</div>
