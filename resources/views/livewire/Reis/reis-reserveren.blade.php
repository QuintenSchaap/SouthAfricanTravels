<style>
    td {
        max-width:750px;
        word-wrap:break-word
    }
    th {
        width: 20%;
    }
</style>
<div style="margin: 50px">
    <div class="card border-dark mb-3">
        <b><div class="card-header">Boeking bij {{ $reis->naamreis }}</div></b>
        <div class="card-body text-dark">
            <table class="table table-bordered" style="padding: 25px; width:100%; font-size: 15px">
                <tbody>
                <tr>
                    <th scope="col">Periode</th>
                    <td>Van {{ $reis->startdatum }} tot {{ $reis->einddatum }}</td>
                </tr>
                <tr>
                    <th scope="col">Prijs p.p</th>
                    <td>€ {{ $reis->prijs }},-</td>
                </tr>
                <tr>
                    <th scope="col">Selecteer het aantal personen</th>
                    <td>
                        <select class="form-control">
                            <option value="0">1 Persoon</option>
                            <option value="1">2 Personen</option>
                            <option value="2">3 Personen</option>
                            <option value="3">4 Personen</option>
                            <option value="4">5 Personen</option>
                            <option value="5">6 Personen</option>
                            <option value="6">7 Personen</option>
                            <option value="7">8 Personen</option>
                            <option value="8">9 Personen</option>
                            <option value="9">10 Personen</option>
                            <option value="10">11 Personen</option>
                            <option value="11">12 Personen</option>
                            <option value="12">13 Personen</option>
                            <option value="13">14 Personen</option>
                            <option value="14">15 Personen</option>
                            <option value="15">16 Personen</option>
                            <option value="16">17 Personen</option>
                            <option value="17">18 Personen</option>
                            <option value="18">19 Personen</option>
                            <option value="19">20 Personen</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th scope="col">BTW</th>
                    <td>21%</td>
                </tr>
                <tr>
                    <th scope="col">Totaal</th>
                    <td>...</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <a class="btn btn-secondary" style="color: white;" href="/reis/bekijken/{{ $reis->idreis }}"><i class="fa-solid fa-arrow-left"></i> Terug</a>
    <a class="btn btn-primary" style="color: white;" href="/reis/boeken/{{ $reis->idreis }}"><i class="fa-solid fa-plus"></i> Reserveren</a>
</div>
