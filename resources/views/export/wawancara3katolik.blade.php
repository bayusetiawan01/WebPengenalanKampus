<table>
    <thead>
        <tr>
            <th>NPM</th>
            <th>Nama Lengkap</th>
            <th>Asal Gereja</th>
            <th>Apakah masuk FMIPA jalan dari Tuhan?</th>
            <th>Jelaskan Tentang Trinitas</th>
            <th>Menurutmu, Siapa Yesus?</th>
            <th>Menurutmu, Natal Seperti Apa</th>
            <th>Pernahkan Melakukan Pelayanan Gereja?</th>
            <th>Seberapa Sering Membaca Alkitab</th>
            <th>Maukah Bergabung KMK Unpad dan Pelayanan Gereja di Jatinangor?</th>
            <th>Adakah Ayat Pegangan? dan Alasannya?</th>
        </tr>
    </thead>
    <tbody>
        @foreach($wawancara as $w)
        <tr>
            <td>{{ $w->npm }}</td>
            <td>{{ $w->nama }}</td>
            <td>{{ $w->asal_gereja }}</td>
            <td>{{ $w->masuk_fmipa }}</td>
            <td>{{ $w->jelaskan_trinitas }}</td>
            <td>{{ $w->siapa_yesus }}</td>
            <td>{{ $w->seperti_apa_natal }}</td>
            <td>{{ $w->pelayanan_gereja }}</td>
            <td>{{ $w->membaca_alkitab }}</td>
            <td>{{ $w->berminat_kmk }}</td>
            <td>{{ $w->ayat_pegangan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>