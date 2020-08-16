<table>
    <thead>
        <tr>
            <th>NPM</th>
            <th>Nama Lengkap</th>
            <th>2 Kalimat Syahadat</th>
            <th>Shalat Wajib</th>
            <th>Tilawah Al-Quran</th>
            <th>Shalat Dhuha</th>
            <th>Shalat Tahajud</th>
            <th>Shalat Rawatib</th>
            <th>Shalat Berjamaah</th>
            <th>Al Ma'tsurat</th>
            <th>Shaum Sunnah</th>
            <th>Pengajian</th>
            <th>Durasi</th>
            <th>Tempat</th>
            <th>Mentoring</th>
            <th>Durasi</th>
            <th>Tempat</th>
            <th>Liqa</th>
            <th>Durasi</th>
            <th>Tempat</th>
            <th>Keputrian</th>
            <th>Durasi</th>
            <th>Tempat</th>
            <th>Baca Tulis Quran</th>
            <th>Durasi</th>
            <th>Tempat</th>
            <th>Hafalan Al Quran</th>
            <th>Buku Islami yang Pernah Dibaca</th>
            <th>Tokoh Islam yang Diketahui</th>
            <th>Pendapat Tentang Jilbab untuk Perempuan</th>
            <th>Pendapat Tentang Ikhtilat dan Khalwat</th>
            <th>Pendapat Tentang Pacaran, Apakah Anda Pacaran?</th>
            <th>Pendapat Tentang Ramalan Bintang</th>
            <th>Pendapat Tentang Merokok</th>
            <th>Pendapat Tentang Memilih Pemimpin non Muslim di Wilayah Mayoritas Muslim</th>
        </tr>
    </thead>
    <tbody>
        @foreach($wawancara as $w)
        <tr>
            <td>{{ $w->npm }}</td>
            <td>{{ $w->nama }}</td>
            <td>{{ $w->kalimat_syahadat }}</td>
            <td>{{ $w->shalat_wajib }}</td>
            <td>{{ $w->tilawah }}</td>
            <td>{{ $w->dhuha }}</td>
            <td>{{ $w->tahajud }}</td>
            <td>{{ $w->rawatib }}</td>
            <td>{{ $w->berjamaah }}</td>
            <td>{{ $w->matsurat }}</td>
            <td>{{ $w->shaum_sunnah }}</td>
            <td>{{ $w->pengajian }}</td>
            <td>{{ $w->durasi_pengajian }}</td>
            <td>{{ $w->tempat_pengajian }}</td>
            <td>{{ $w->mentoring }}</td>
            <td>{{ $w->durasi_mentoring }}</td>
            <td>{{ $w->tempat_mentoring }}</td>
            <td>{{ $w->liqa }}</td>
            <td>{{ $w->durasi_liqa }}</td>
            <td>{{ $w->tempat_liqa }}</td>
            <td>{{ $w->keputrian }}</td>
            <td>{{ $w->durasi_keputrian }}</td>
            <td>{{ $w->tempat_keputrian }}</td>
            <td>{{ $w->baca_quran }}</td>
            <td>{{ $w->durasi_baca_quran }}</td>
            <td>{{ $w->tempat_baca_quran }}</td>
            <td>{{ $w->hafalan_quran }}</td>
            <td>{{ $w->buku_islam }}</td>
            <td>{{ $w->tokoh_islam }}</td>
            <td>{{ $w->pendapat_jilbab }}</td>
            <td>{{ $w->pendapat_ikhtilat }}</td>
            <td>{{ $w->pendapat_pacaran }}</td>
            <td>{{ $w->ramalan_bintang }}</td>
            <td>{{ $w->pendapat_merokok }}</td>
            <td>{{ $w->pemimpin_non_muslim }}</td>
        </tr>
        @endforeach
    </tbody>
</table>