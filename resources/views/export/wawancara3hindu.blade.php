<table>
    <thead>
        <tr>
            <th>NPM</th>
            <th>Nama Lengkap</th>
            <th>Menurutmu hal apa yang paling esensi dari Agama Hindu</th>
            <th>Apa dasar agama hindu yang diketahui</th>
            <th>Apa tujuan melakukan Yadnya selama ini?</th>
            <th>Pernahkah ada perasaan mengeluh dengan hal itu?</th>
            <th>Apakah berminat bergabung dengan KMH?</th>
            <th>Menurutmu apa program yang bagus untuk Organisasi Hindu Kedepannya</th>
        </tr>
    </thead>
    <tbody>
        @foreach($wawancara as $w)
        <tr>
            <td>{{ $w->npm }}</td>
            <td>{{ $w->nama }}</td>
            <th>{{ $w->pemahaman_agama_hindu }}</th>
            <td>{{ $w->dasar_agama_hindu }}</td>
            <td>{{ $w->tujuan_yadnya }}</td>
            <td>{{ $w->pernahkah_mengeluh }}</td>
            <td>{{ $w->berminat_kmh }}</td>
            <td>{{ $w->saran_program }}</td>
        </tr>
        @endforeach
    </tbody>
</table>