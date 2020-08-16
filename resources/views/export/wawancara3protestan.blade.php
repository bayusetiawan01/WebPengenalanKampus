<table>
    <thead>
        <tr>
            <th>NPM</th>
            <th>Nama Lengkap</th>
            <th>Asal Gereja</th>
            <th>Percaya atau tidak kalo masuk FMIPA jalan dari Tuhan</th>
            <th>Apakah kesaksian perbuatan yang pernah dialami olehmu?</th>
            <th>Apa arti Natal?</th>
            <th>Siapa Yesus?</th>
            <th>Pernahkan Melakukan Pelayanan Gereja?</th>
            <th>Seberapa Sering Membaca Alkitab</th>
            <th>Mau mengikuti kegiatan pelayanan di PMK UNPAD?</th>
            <th>Apa ayat alkitab yang paling disukai? Alasannya?</th>
            <th>Apakah mengetahui persekutuan yang ada di FMIPA?</th>
            <th>Setelah mengetahui maukah mengikutinya?</th>
            <th>Apakah arti pelayanan bagimu?</th>
        </tr>
    </thead>
    <tbody>
        @foreach($wawancara as $w)
        <tr>
            <td>{{ $w->npm }}</td>
            <td>{{ $w->nama }}</td>
            <th>{{ $w->asal_gereja }}</th>
            <td>{{ $w->masuk_fmipa }}</td>
            <td>{{ $w->kesaksian_pertolongan }}</td>
            <td>{{ $w->arti_natal }}</td>
            <td>{{ $w->siapa_yesus }}</td>
            <td>{{ $w->pelayanan_gereja }}</td>
            <td>{{ $w->membaca_alkitab }}</td>
            <td>{{ $w->berminat_pmk }}</td>
            <td>{{ $w->ayat_disukai }}</td>
            <th>{{ $w->persekutuan_fmipa }}</th>
            <th>{{ $w->maukah_ikut_persekutuan_fmipa }}</th>
            <th>{{ $w->arti_pelayanan }}</th>
        </tr>
        @endforeach
    </tbody>
</table>