<style>
    td {
        max-width:750px;
        word-wrap:break-word
    }
</style>
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
                    <td>€ {{ $bestemming->prijs }},-</td>
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
                    <td>{!! $accommodaties->ligging !!}</td>
                </tr>
                <tr>
                    <th scope="col">Faciliteiten</th>
                    <td>{!! $accommodaties->faciliteiten !!}</td>
                </tr>
                <tr>
                    <th scope="col">Beschrijving</th>
                    <td>{{ $bestemming->beschrijving }}</td>
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
    <a class="btn btn-secondary" style="color: white;" href="/bestemming"><i class="fa-solid fa-arrow-left"></i> Terug</a>
    <a class="btn btn-primary" style="color: white;" href="/bestemming/boeken/{{ $bestemming->idbestemming }}"><i class="fa-solid fa-plus"></i> Reserveren</a>
    @auth
    <a class="btn btn-dark" style="color: white;" href="/bestemming/bewerken/{{ $bestemming->idbestemming }}"><i class="fa-solid fa-pen-to-square"></i> Bewerken</a>
    @endauth
</div>
