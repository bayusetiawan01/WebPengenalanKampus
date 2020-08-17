<table>
    <thead>
        <tr>
            <th>NPM</th>
            <th>Nama Lengkap</th>
            <th>Penyakit yang pernah dialami</th>
            <th>Kapan Terakhir Mengalami?</th>
            <th>Untuk Rentang 0-8 Minggu, Seberapa sering terjadi?</th>
            <th>Mampu Berjalan 200 Meter Berapa Menit?</th>
            <th>Apakah Anda Mempunyai Alergi?</th>
            <th>Jenis alergi apa yang anda miliki?</th>
            <th>Pantangan dari dokter</th>
            <th>Kelainan mental yang pernah dialami</th>
            <th>Apakah pernah dikonsultasikan?</th>
            <th>Adakah pemberian obat? Obat apa?</th>
            <th>Untuk Bipolar, Trauma, Kecemasan, Fobia, Stress, apakah pemicunya?</th>
        </tr>
    </thead>
    <tbody>
        @foreach($wawancara as $w)
        <tr>
            <td>{{ $w->npm }}</td>
            <td>{{ $w->nama }}</td>
            <td><?php if ($w->asma == 'on') {
                    echo "Asma, ";
                } ?>
                <?php if ($w->jantung == 'on') {
                    echo "Penyakit Jantung, ";
                } ?>
                <?php if ($w->hipotensi == 'on') {
                    echo "Hipotensi, ";
                } ?>
                <?php if ($w->tbc == 'on') {
                    echo "TBC, ";
                } ?>
                <?php if ($w->patah_tulang == 'on') {
                    echo "Patah Tulang, ";
                } ?>
                <?php if ($w->anemia == 'on') {
                    echo "Anemia, ";
                } ?>
                <?php if ($w->pneumonia == 'on') {
                    echo "Pneumonia, ";
                } ?>
                <?php if ($w->hipertensi == 'on') {
                    echo "Hipertensi, ";
                } ?><?php if ($w->kolera == 'on') {
                        echo "Kolera, ";
                    } ?>
                <?php if ($w->epilepsi == 'on') {
                    echo "Epilepsi, ";
                } ?><?php if ($w->diabetes == 'on') {
                        echo "Diabetes, ";
                    } ?>
                <?php if ($w->maag == 'on') {
                    echo "Maag, ";
                } ?>
                <?php if ($w->penyakit_lain != NULL) {
                    echo $w->penyakit_lain;
                } ?>
            </td>
            <td>{{ $w->terakhir_mengalami }}</td>
            <td>{{ $w->seberapa_sering_terjadi }}</td>
            <td>{{ $w->mampu_berjalan }}</td>
            <td>{{ $w->mempunyai_alergi }}</td>
            <td>{{ $w->jenis_alergi }}</td>
            <td>{{ $w->pantangan }}</td>
            <td>
                <?php if ($w->fobia == 'on') {
                    echo "Fobia, ";
                } ?>
                <?php if ($w->disosiatif == 'on') {
                    echo "Gangguan Disosiatif, ";
                } ?>
                <?php if ($w->bipolar == 'on') {
                    echo "Bipolar, ";
                } ?>
                <?php if ($w->stress == 'on') {
                    echo "Stress, ";
                } ?>
                <?php if ($w->kecemasan == 'on') {
                    echo "Kecemasan, ";
                } ?>
                <?php if ($w->depresi == 'on') {
                    echo "Depresi, ";
                } ?>
                <?php if ($w->adhd == 'on') {
                    echo "ADHD, ";
                } ?>
                <?php if ($w->self_harm == 'on') {
                    echo "Self Harm, ";
                } ?>
                <?php if ($w->trauma == 'on') {
                    echo "Trauma, ";
                } ?>
                <?php if ($w->mental_lainnya != NULL) {
                    echo $w->mental_lainnya;
                } ?>
            </td>
            <td>{{ $w->dikonsultasikan }}</td>
            <td>{{ $w->obat }}</td>
            <td>{{ $w->pemicu }}</td>
        </tr>
        @endforeach
    </tbody>
</table>