<table>
    <thead>
        <tr>
            <th>NPM</th>
            <th>Nama Lengkap</th>
            <th>Apa yang diketahui tentang Agama Buddha?</th>
            <th>Mengapa memilih Agama Buddha?</th>
            <th>Apakah pernah mengikuti kelas Agama Buddha Sebelumnya?</th>
            <th>Apa yang diketahui tentang 4 hari besar Agama Buddha?</th>
            <th>Sebutkan dan Jelaskan mengenai pancasila Buddha!</th>
        </tr>
    </thead>
    <tbody>
        @foreach($wawancara as $w)
        <tr>
            <td>{{ $w->npm }}</td>
            <td>{{ $w->nama }}</td>
            <th>{{ $w->tentang_agama_budha }}</th>
            <td>{{ $w->memilih_agama_budha }}</td>
            <td>{{ $w->kelas_agama_budha }}</td>
            <td>{{ $w->hari_besar_budha }}</td>
            <td>{{ $w->pancasila_buddhist }}</td>
        </tr>
        @endforeach
    </tbody>
</table>