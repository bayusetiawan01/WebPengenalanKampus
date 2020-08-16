<table>
    <thead>
        <tr>
            <th>NPM</th>
            <th>Nama Lengkap</th>
            <th>Kekurangan dan Kelebihan</th>
            <th>Perbedaan Siswa dan Mahasiswa</th>
            <th>Pengetahuan tentang BEM dan HIMA</th>
            <th>Peran dan Fungsi Angkatan FMIPA UNPAD</th>
            <th>Kritis</th>
            <th>Solusional</th>
            <th>Logis</th>
            <th>Sistematis</th>
            <th>Berlandasan</th>
            <th>Arti Pemimpin dan Pemimpin Idola</th>
            <th>Pengetahuan tentang Koordinator Angkatan dan Siapkah Menjadi Korang?</th>
        </tr>
    </thead>
    <tbody>
        @foreach($wawancara as $w)
        <tr>
            <td>{{ $w->npm }}</td>
            <td>{{ $w->nama }}</td>
            <td>{{ $w->kekurangan_kelebihan }}</td>
            <td>{{ $w->perbedaan_mahasiswa }}</td>
            <td>{{ $w->bem_hima }}</td>
            <td>{{ $w->fungsi_angkatan }}</td>
            <td>{{ $w->kritis }}</td>
            <td>{{ $w->solusional }}</td>
            <td>{{ $w->logis }}</td>
            <td>{{ $w->sistematis }}</td>
            <td>{{ $w->berlandasan }}</td>
            <td>{{ $w->arti_pemimpin }}</td>
            <td>{{ $w->koordinator }}</td>
        </tr>
        @endforeach
    </tbody>
</table>