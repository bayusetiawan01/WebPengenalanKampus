<table>
    <thead>
        <tr>
            <th>NPM</th>
            <th>Nama Lengkap</th>
            <th>Surat Izin</th>
            <th>Surat Pernyataan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($wawancara as $w)
        <tr>
            <td>{{ $w->npm }}</td>
            <td>{{ $w->nama }}</td>
            <td></td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>