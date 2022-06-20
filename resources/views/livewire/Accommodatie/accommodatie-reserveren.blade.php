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
        <b><div class="card-header">Boeking bij {{ $bestemming->naam }}</div></b>
        <div class="card-body text-dark">
            <table class="table table-bordered" style="padding: 25px; width:100%; font-size: 15px">
                <tbody>
                <tr>
                    <th scope="col">Periode</th>
                    <td>Van {{ $bestemming->startdatum }} tot {{ $bestemming->einddatum }}</td>
                </tr>
                <tr>
                    <th scope="col">Prijs p.p</th>
                    <td>€ {{ $bestemming->prijs }},-</td>
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
    <a class="btn btn-secondary" style="color: white;" href="/accommodatie/bekijken/{{ $bestemming->idbestemming }}"><i class="fa-solid fa-arrow-left"></i> Terug</a>
    <a class="btn btn-primary" style="color: white;" href="/accommodatie/boeken/{{ $bestemming->idbestemming }}"><i class="fa-solid fa-plus"></i> Reserveren</a>
</div>
