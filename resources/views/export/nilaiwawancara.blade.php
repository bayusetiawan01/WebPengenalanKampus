<table>
    <thead>
        <tr>
            <th>NPM</th>
            <th>Nama Lengkap</th>
            <th>Pengalaman Organisasi</th>
            <th>Jawaban Studi Kasus</th>
            <th>Jawaban Selama Wawancara</th>
            <th>Sikap Selama Wawancara</th>
            <th>Ketersediaan Menjadi Koordinator Angkatan</th>
            <th>SBMPTN Lagi</th>
            <th>Menyebutkan Prodi di MIPA</th>
            <th>Tahu LK/KKM di MIPA</th>
            <th>Sikap terhadap Prodi Lain</th>
        </tr>
    </thead>
    <tbody>
        @foreach($wawancara as $w)
        <tr>
            <td>{{ $w->npm }}</td>
            <td>{{ $w->nama }}</td>
            <td>{{ $w->organisasi }}</td>
            <td>{{ $w->jawaban_studi_kasus }}</td>
            <td>{{ $w->jawaban_wawancara }}</td>
            <td>{{ $w->sikap_wawancara }}</td>
            <td>{{ $w->koordinator }}</td>
            <td>{{ $w->sbmptn }}</td>
            <td>{{ $w->prodi_mipa }}</td>
            <td>{{ $w->lk_kkm }}</td>
            <td>{{ $w->sikap_prodi }}</td>
        </tr>
        @endforeach
    </tbody>
</table>