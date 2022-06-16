<div style="margin: 50px">
    <table class="table table-bordered" style="padding: 25px">
        <tbody>
        @foreach ($landen as $land)
        <tr>
            <th scope="col">Land</th>
            <td>{{ $land->land }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
<footer style="visibility: hidden">

