<table>
    <thead>
        <tr>
            <th>NPM</th>
            <th>Nama Lengkap</th>
            <th>Apakah akses internet utama yang anda gunakan?</th>
            <th>Apakah akses tersebut unlimited?</th>
            <th>Jika tidak, berapa pemakaian anda internet Anda dalam sebulan?</th>
            <th>Kendala apa saja yang sering dialami selama anda menggunakan akses internet tersebut?</th>
            <th>Apakah akses internet tersebut lancar untuk video call dan streaming?</th>
            <th>Device pendukung keadaan kegiatan online yang dimiliki</th>
            <th>Apakah device tersebut memiliki kamera dan bisa digunakan untuk video call?</th>
            <th>Platform apa yang pernah kalian gunakan</th>
            <th>Dari platform tersebut apakah ada kendala saat penggunaan?</th>
            <th>Zona waktu Indonesia bagian manakah kalian tinggal?</th>
            <th>Kegiatan rutin di rumah apa yang dapat mempengaruhi forum online yang diadakan?</th>
        </tr>
    </thead>
    <tbody>
        @foreach($wawancara as $w)
        <tr>
            <td>{{ $w->npm }}</td>
            <td>{{ $w->nama }}</td>
            <td>{{ $w->akses_internet }}</td>
            <td>{{ $w->unlimited }}</td>
            <td>{{ $w->sebulan }}</td>
            <td>{{ $w->kendala }}</td>
            <td>{{ $w->streaming }}</td>
            <td>
                <?php if ($w->pc == 'on') {
                    echo "PC, ";
                } ?>
                <?php if ($w->laptop == 'on') {
                    echo "Laptop, ";
                } ?>
                <?php if ($w->smartphone == 'on') {
                    echo "Smartphone, ";
                } ?>
                <?php if ($w->tablet == 'on') {
                    echo "Tablet, ";
                } ?>
                <?php if ($w->lainnya2 == 'on') {
                    echo "Lainnya";
                } ?>
            </td>
            <td>{{ $w->kamera }}</td>
            <td><?php if ($w->discord == 'on') {
                    echo "Discord, ";
                } ?>
                <?php if ($w->meet == 'on') {
                    echo "Google Meet, ";
                } ?>
                <?php if ($w->zoom == 'on') {
                    echo "Zoom, ";
                } ?>
                <?php if ($w->tidak_satupun == 'Tidak Satupun') {
                    echo "PC,";
                } ?>
            </td>
            <td>{{ $w->kendala_penggunaan }}</td>
            <td>{{ $w->waktu }}</td>
            <td>{{ $w->kegiatan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>