<style>
    td {
        max-width:750px;
        word-wrap:break-word
    }
</style>
@if (session()->has('reisVeranderd'))
<div class="alert alert-success" style="margin-top: 25px; margin-bottom: -25px; margin-right: 50px; margin-left: 50px">
    {{ session('reisVeranderd') }}
</div>
@endif
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
                    <td>€ {{ $reis->prijs }},-</td>
                </tr>
                <tr>
                    <th scope="col">Periode</th>
                    <td>Van {{ $reis->startdatum }} tot {{ $reis->einddatum }}</td>
                </tr>
                <tr>
                    <th scope="col">Beschrijving</th>
                    <td>{{ $reis->beschrijving }}</td>
                </tr>
                <tr>
                    <th scope="col">Foto</th>
                    <td><img src='{{ URL::asset("images/reis/$reis->naamreis.jpg") }}' style="height: 400px; width: 650px"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <a class="btn btn-secondary" style="color: white;" href="/reis"><i class="fa-solid fa-arrow-left"></i> Terug</a>
    <a class="btn btn-primary" style="color: white;" href="/reis/boeken/{{ $reis->idreis }}"><i class="fa-solid fa-plus"></i> Reserveren</a>
    @auth
    <a class="btn btn-dark" style="color: white;" href="/reis/bewerken/{{ $reis->idreis }}"><i class="fa-solid fa-pen-to-square"></i> Bewerken</a>
    @endauth
</div>
