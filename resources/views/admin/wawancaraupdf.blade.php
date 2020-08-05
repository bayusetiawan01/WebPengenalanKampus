<html>

<head>
    <title>Wawancara</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <h5>Isi Form Wawancara</h4><br>
        {{$isi->nama}} ( {{$isi->npm}} )
    </h5>
    <h3>Data Diri</h3>
    @if($isi!=NULL)
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Pertanyaan</th>
                <th>Jawaban</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nama</td>
                <td>{{$isi->nama}}</td>
            </tr>
            <tr>
                <td>Nama Panggilan</td>
                <td>{{$isi->nama_panggilan}}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>{{$isi->jenis_kelamin}}</td>
            </tr>
            <tr>
                <td>NPM</td>
                <td>{{$isi->npm}}</td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>{{$isi->jurusan}}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>{{$isi->agama}}</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>{{$isi->tempat_lahir}}</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>{{$isi->tanggal_lahir}}</td>
            </tr>
            <tr>
                <td>Anak ke</td>
                <td>{{$isi->anak_ke}}</td>
            </tr>
            <tr>
                <td>Bersaudara</td>
                <td>{{$isi->bersaudara}}</td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Nama Ayah</td>
                <td>{{$isi->nama_ayah}}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>{{$isi->pekerjaan_ayah}}</td>
            </tr>
            <tr>
                <td>No Telp Ayah</td>
                <td>{{$isi->telp_ayah}}</td>
            </tr>
            <tr>
                <td>Nama Ibu</td>
                <td>{{$isi->nama_ibu}}</td>
            </tr>
            <tr>
                <td>Pekerjaan Ibu</td>
                <td>{{$isi->pekerjaan_ibu}}</td>
            </tr>
            <tr>
                <td>No Telp Ibu</td>
                <td>{{$isi->telp_ibu}}</td>
            </tr>
            <tr>
                <td>Kegemaran / Hobi</td>
                <td>{{$isi->hobi}}</td>
            </tr>
            <tr>
                <td>Nomor Hp Pribadi</td>
                <td>{{$isi->nohp}}</td>
            </tr>
            <tr>
                <td>Golongan Darah</td>
                <td>{{$isi->golongan_darah}}</td>
            </tr>
            <tr>
                <td>Tekanan Darah</td>
                <td>{{$isi->tekanan_darah}}</td>
            </tr>
            <tr>
                <td>Tinggi Badan</td>
                <td>{{$isi->tinggi_badan}}</td>
            </tr>
            <tr>
                <td>Berat Badan</td>
                <td>{{$isi->berat_badan}}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{$isi->email}}</td>
            </tr>
            <tr>
                <td>Alamat Rumah</td>
                <td>{{$isi->alamat_rumah}}</td>
            </tr>
            <tr>
                <td>Telepon Rumah</td>
                <td>{{$isi->telp_rumah}}</td>
            </tr>
            <tr>
                <td>Alamat Kost</td>
                <td>{{$isi->alamat_kost}}</td>
            </tr>
            <tr>
                <td>Telepon Kost</td>
                <td>{{$isi->telp_kost}}</td>
            </tr>
            <tr>
                <td>Nama TK</td>
                <td>{{$isi->nama_tk}}</td>
            </tr>
            <tr>
                <td>Kota</td>
                <td>{{$isi->kota_tk}}</td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>{{$isi->tahun_tk}}</td>
            </tr>
            <tr>
                <td>Nama SD</td>
                <td>{{$isi->nama_sd}}</td>
            </tr>
            <tr>
                <td>Kota</td>
                <td>{{$isi->kota_sd}}</td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>{{$isi->tahun_sd}}</td>
            </tr>
            <tr>
                <td>Nama SMP</td>
                <td>{{$isi->nama_smp}}</td>
            </tr>
            <tr>
                <td>Kota</td>
                <td>{{$isi->kota_smp}}</td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>{{$isi->tahun_smp}}</td>
            </tr>
            <tr>
                <td>Nama SMA</td>
                <td>{{$isi->nama_sma}}</td>
            </tr>
            <tr>
                <td>Kota</td>
                <td>{{$isi->kota_sma}}</td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>{{$isi->tahun_sma}}</td>
            </tr>
            <tr>
                <td>Nama PT</td>
                <td>{{$isi->nama_pt}}</td>
            </tr>
            <tr>
                <td>Kota</td>
                <td>{{$isi->kota_pt}}</td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>{{$isi->tahun_pt}}</td>
            </tr>
            <tr>
                <td>Nama Organisasi</td>
                <td>{{$isi->organisasi1}}</td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>{{$isi->jabatan1}}</td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>{{$isi->tahun1}}</td>
            </tr>
            <tr>
                <td>Nama Organisasi</td>
                <td>{{$isi->organisasi2}}</td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>{{$isi->jabatan2}}</td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>{{$isi->tahun2}}</td>
            </tr>
            <tr>
                <td>Nama Organisasi</td>
                <td>{{$isi->organisasi3}}</td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>{{$isi->jabatan3}}</td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>{{$isi->tahun3}}</td>
            </tr>
            <tr>
                <td>Nama Organisasi</td>
                <td>{{$isi->organisasi4}}</td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>{{$isi->jabatan4}}</td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>{{$isi->tahun4}}</td>
            </tr>
            <tr>
                <td>Nama Organisasi</td>
                <td>{{$isi->organisasi5}}</td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>{{$isi->jabatan5}}</td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>{{$isi->tahun5}}</td>
            </tr>
            <tr>
                <td>Prestasi</td>
                <td>{{$isi->prestasi1}}</td>
            </tr>
            <tr>
                <td>Lembaga</td>
                <td>{{$isi->lembaga1}}</td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>{{$isi->tahunp1}}</td>
            </tr>
            <tr>
                <td>Prestasi</td>
                <td>{{$isi->prestasi2}}</td>
            </tr>
            <tr>
                <td>Lembaga</td>
                <td>{{$isi->lembaga2}}</td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>{{$isi->tahunp2}}</td>
            </tr>
            <tr>
                <td>Prestasi</td>
                <td>{{$isi->prestasi3}}</td>
            </tr>
            <tr>
                <td>Lembaga</td>
                <td>{{$isi->lembaga3}}</td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>{{$isi->tahunp3}}</td>
            </tr>
            <tr>
                <td>Prestasi</td>
                <td>{{$isi->prestasi4}}</td>
            </tr>
            <tr>
                <td>Lembaga</td>
                <td>{{$isi->lembaga4}}</td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>{{$isi->tahunp4}}</td>
            </tr>
            <tr>
                <td>Prestasi</td>
                <td>{{$isi->prestasi5}}</td>
            </tr>
            <tr>
                <td>Lembaga</td>
                <td>{{$isi->lembaga5}}</td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>{{$isi->tahunp5}}</td>
            </tr>
        </tbody>
    </table>
    @endif
    <h3>Informasi Diri</h3>
    @if($isi2!=NULL)
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Pertanyaan</th>
                <th>Jawaban</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sebutkan kekurangan dan kelebihan anda!</td>
                <td>{{$isi2->kekurangan_kelebihan}}</td>
            </tr>
            <tr>
                <td>Apa yang kamu ketahui tentang perbedaan siswa dan mahasiswa?</td>
                <td>{{$isi2->perbedaan_mahasiswa}}</td>
            </tr>
            <tr>
                <td>Apa yang kamu ketahui tentang BEM? Apa yang kamu ketahui tentang Himpunan Mahasiswa?</td>
                <td>{{$isi2->bem_hima}}</td>
            </tr>
            <tr>
                <td>Menurut kamu, apa peran dan fungsi angkatan FMIPA Unpad?</td>
                <td>{{$isi2->fungsi_angkatan}}</td>
            </tr>
            <tr>
                <td>Kritis</td>
                <td>{{$isi2->kritis}}</td>
            </tr>
            <tr>
                <td>Solusional</td>
                <td>{{$isi2->solusional}}</td>
            </tr>
            <tr>
                <td>Logis</td>
                <td>{{$isi2->logis}}</td>
            </tr>
            <tr>
                <td>Sistematis</td>
                <td>{{$isi2->sistematis}}</td>
            </tr>
            <tr>
                <td>Berlandasan</td>
                <td>{{$isi2->berlandasan}}</td>
            </tr>
            <tr>
                <td>Apa arti pemimpin menurutmu? Siapa pemimpin idolamu (selain Rasulullah)?</td>
                <td>{{$isi2->arti_pemimpin}}</td>
            </tr>
            <tr>
                <td>Apa yang kamu ketahui tentang koordinator angkatan? Siapkah menjadi koordinator angkatan?</td>
                <td>{{$isi2->koordinator}}</td>
            </tr>
        </tbody>
    </table>
    @endif
    <h3>Kesehatan</h3>
    @if($isi3!=NULL)
    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
        <thead>
            <tr>
                <th>Pertanyaan</th>
                <th>Jawaban</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.	Penyakit yang pernah dialami</td>
                <td><?php if($isi3->asma == 'on'){echo "Asma, ";} ?><?php if($isi3->jantung == 'on'){echo "Penyakit Jantung, ";} ?><?php if($isi3->hipotensi == 'on'){echo "Hipotensi, ";} ?><?php if($isi3->tbc == 'on'){echo "TBC, ";} ?><?php if($isi3->patah_tulang == 'on'){echo "Patah Tulang, ";} ?><?php if($isi3->anemia == 'on'){echo "Anemia, ";} ?><?php if($isi3->pneumonia == 'on'){echo "Pneumonia, ";} ?><?php if($isi3->hipertensi == 'on'){echo "Hipertensi, ";} ?><?php if($isi3->kolera == 'on'){echo "Kolera, ";} ?><?php if($isi3->epilepsi == 'on'){echo "Epilepsi, ";} ?><?php if($isi3->diabetes == 'on'){echo "Diabetes, ";} ?><?php if($isi3->maag == 'on'){echo "Maag, ";} ?><?php if($isi3->penyakit_lain != NULL){echo $isi3->penyakit_lain;} ?></td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;a. Kapan terakhir mengalami?</td>
                <td>{{$isi3->terakhir_mengalami}}</td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;b. Untuk rentang 0-8 minggu, Seberapa sering terjadi?</td>
                <td>{{$isi3->seberapa_sering_terjadi}}</td>
            </tr>
            <tr>
                <td>2. Mampu berjalan 200 meter tercepat seberapa lama?</td>
                <td>{{$isi3->mampu_berjalan}}</td>
            </tr>
            <tr>
                <td>3. Apakah Anda mempunyai alergi?</td>
                <td>{{$isi3->mempunyai_alergi}}</td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;Jenis alergi apa yang anda miliki? </td>
                <td>{{$isi3->jenis_alergi}}</td>
            </tr>
            <tr>
                <td>4. Untuk yang memiliki penyakit diatas, apakah ada pantangan dari dokter?</td>
                <td>{{$isi3->pantangan}}</td>
            </tr>
            <tr>
                <td>5.	Kelainan mental yang pernah dialami</td>
                <td><?php if($isi3->fobia == 'on'){echo "Fobia, ";} ?><?php if($isi3->disosiatif == 'on'){echo "Gangguan Disosiatif, ";} ?><?php if($isi3->bipolar == 'on'){echo "Bipolar, ";} ?><?php if($isi3->stress == 'on'){echo "Stress, ";} ?><?php if($isi3->kecemasan == 'on'){echo "Kecemasan, ";} ?><?php if($isi3->depresi == 'on'){echo "Depresi, ";} ?><?php if($isi3->adhd == 'on'){echo "ADHD, ";} ?><?php if($isi3->self_harm == 'on'){echo "Self Harm, ";} ?><?php if($isi3->trauma == 'on'){echo "Trauma, ";} ?><?php if($isi3->mental_lainnya != NULL){echo $isi3->mental_lainnya;} ?></td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;a. Apakah pernah dikonsultasikan?</td>
                <td>{{$isi3->dikonsultasikan}}</td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;b. Ada medikasi (pemberian obat)? Obat apa?</td>
                <td>{{$isi3->obat}}</td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;c. Untuk bipolar,trauma,kecemasan,fobia,stress, apakah pemicunya?</td>
                <td>{{$isi3->pemicu}}</td>
            </tr>
        </tbody>
    </table>
    @endif
    <h3>Agama</h3>
    @if($isi->agama = 'islam' && $isi4i != NULL)
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Pertanyaan</th>
                <th>Jawaban</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Kalimat Syahadat</td>
                <td>{{$isi4i->kalimat_syahadat}}</td>
            </tr>
            <tr>
                <td>Shalat Wajib</td>
                <td>{{$isi4i->shalat_wajib}}</td>
            </tr>
            <tr>
                <td>Tilawah Al-Qur’an</td>
                <td>{{$isi4i->tilawah}}</td>
            </tr>
            <tr>
                <td>Shalat Dhuha</td>
                <td>{{$isi4i->dhuha}}</td>
            </tr>
            <tr>
                <td>Shalat Tahajud</td>
                <td>{{$isi4i->tahajud}}</td>
            </tr>
            <tr>
                <td>Shalat Rawatib</td>
                <td>{{$isi4i->rawatib}}</td>
            </tr>
            <tr>
                <td>Shalat Berjamaah</td>
                <td>{{$isi4i->berjamaah}}</td>
            </tr>
            <tr>
                <td>Al Ma’tsurat</td>
                <td>{{$isi4i->matsurat}}</td>
            </tr>
            <tr>
                <td>Shaum Sunnah</td>
                <td>{{$isi4i->shaum_sunnah}}</td>
            </tr>
            <tr>
                <td>Pengajian</td>
                <td>{{$isi4i->pengajian}}</td>
            </tr>
            <tr>
                <td>Durasi</td>
                <td>{{$isi4i->durasi_pengajian}}</td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td>{{$isi4i->tempat_pengajian}}</td>
            </tr>
            <tr>
                <td>Mentoring</td>
                <td>{{$isi4i->mentoring}}</td>
            </tr>
            <tr>
                <td>Durasi</td>
                <td>{{$isi4i->durasi_mentoring}}</td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td>{{$isi4i->tempat_mentoring}}</td>
            </tr>
            <tr>
                <td>Liqa</td>
                <td>{{$isi4i->liqa}}</td>
            </tr>
            <tr>
                <td>Durasi</td>
                <td>{{$isi4i->durasi_liqa}}</td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td>{{$isi4i->tempat_liqa}}</td>
            </tr>
            <tr>
                <td>Keputrian</td>
                <td>{{$isi4i->keputrian}}</td>
            </tr>
            <tr>
                <td>Durasi</td>
                <td>{{$isi4i->durasi_keputrian}}</td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td>{{$isi4i->tempat_keputrian}}</td>
            </tr>
            <tr>
                <td>Baca Tulis Quran</td>
                <td>{{$isi4i->baca_quran}}</td>
            </tr>
            <tr>
                <td>Durasi</td>
                <td>{{$isi4i->durasi_baca_quran}}</td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td>{{$isi4i->tempat_baca_quran}}</td>
            </tr>
            <tr>
                <td>Jumlah Hafalan Quran</td>
                <td>{{$isi4i->hafalan_quran}}</td>
            </tr>
            <tr>
                <td>Sebutkan buku/ majalah/ tabloid/ bulletin islami yang pernah/ sering Anda baca!</td>
                <td>{{$isi4i->buku_islam}}</td>
            </tr>
            <tr>
                <td>Tuliskan tokoh Islam yang anda ketahui!</td>
                <td>{{$isi4i->tokoh_islam}}</td>
            </tr>
            <tr>
                <td>Berikan pendapat Anda tentang Jilbab! Untuk perempuan apakah anda menggunakan jilbab?</td>
                <td>{{$isi4i->pendapat_jilbab}}</td>
            </tr>
            <tr>
                <td>Bagaimana pendapat Anda mengenai ikhtilat (bercampur baur antara laki-laki dan perempuan) dan khalwat (berdua-duaan antara laki-laki dan perempuan yang bukan mahram)?</td>
                <td>{{$isi4i->pendapat_ikhtilat}}</td>
            </tr>
            <tr>
                <td>Bagaimana pendapat Anda mengenai pacaran?</td>
                <td>{{$isi4i->pendapat_pacaran}}</td>
            </tr>
            <tr>
                <td>Apakah Anda menyukai bacaan tentang ramalan bintang?</td>
                <td>{{$isi4i->ramalan_bintang}}</td>
            </tr>
            <tr>
                <td>Apakah Anda merokok? Berikan pendapatmu!</td>
                <td>{{$isi4i->pendapat_merokok}}</td>
            </tr>
            <tr>
                <td>Bagaimana pendapat anda mengenai memilih pemimpin non muslim di suatu wilayah yang masyarakatnya mayoritas muslim?</td>
                <td>{{$isi4i->pemimpin_non_muslim}}</td>
            </tr>
        </tbody>
    </table>
    @elseif($isi->agama = 'protestan' && $isi4p != NULL)
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Pertanyaan</th>
                <th>Jawaban</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Asala Gereja</td>
                <td>{{$isi4p->asal_gereja}}</td>
            </tr>
            <tr>
                <td>Percaya atau tidak kalo masuk fmipa unpad itu jalan dari Tuhan? Ceritakan!</td>
                <td>{{$isi4p->masuk_fmipa}}</td>
            </tr>
            <tr>
                <td>Apa Kesaksian perbuatan / pertolongan yang pernah dialami oleh anda?</td>
                <td>{{$isi4p->kesaksian_pertolongan}}</td>
            </tr>
            <tr>
                <td>Apa arti Natal menurut anda?</td>
                <td>{{$isi4p->arti_natal}}</td>
            </tr>
            <tr>
                <td>Siapa Yesus menurut anda?</td>
                <td>{{$isi4p->siapa_yesus}}</td>
            </tr>
            <tr>
                <td>Pernahkah anda melakukan pelayanan gereja?</td>
                <td>{{$isi4p->pelayanan_gereja}}</td>
            </tr>
            <tr>
                <td>Seberapa sering anda membaca alkitab</td>
                <td>{{$isi4p->membaca_alkitab}}</td>
            </tr>
            <tr>
                <td>Berminat PMK</td>
                <td>{{$isi4p->berminat_pmk}}</td>
            </tr>
            <tr>
                <td>Ayat Disukai</td>
                <td>{{$isi4p->ayat_disukai}}</td>
            </tr>
            <tr>
                <td>Persekutuan FMIPA</td>
                <td>{{$isi4p->persekutuan_fmipa}}</td>
            </tr>
            <tr>
                <td>Maukah kamu mengikutinya?</td>
                <td>{{$isi4p->maukah_ikut_persekutuan_fmipa}}</td>
            </tr>
            <tr>
                <td>Apa arti pelayanan bagi anda?</td>
                <td>{{$isi4p->arti_pelayanan}}</td>
            </tr>
        </tbody>
    </table>
    @elseif($isi->agama = 'katholik' && $isi4k != NULL)
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Pertanyaan</th>
                <th>Jawaban</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Asala Gereja</td>
                <td>{{$isi4k->asal_gereja}}</td>
            </tr>
            <tr>
                <td>Percaya atau tidak kalo masuk fmipa unpad itu jalan dari Tuhan? Ceritakan!</td>
                <td>{{$isi4k->masuk_fmipa}}</td>
            </tr>
            <tr>
                <td>Jelaskan mengenai trinitas?</td>
                <td>{{$isi4k->jelaskan_trinitas}}</td>
            </tr>
            <tr>
                <td>Apa arti Natal menurut anda?</td>
                <td>{{$isi4k->arti_natal}}</td>
            </tr>
            <tr>
                <td>Siapa Yesus menurut anda?</td>
                <td>{{$isi4k->siapa_yesus}}</td>
            </tr>
            <tr>
                <td>Pernahkah anda melakukan pelayanan gereja?</td>
                <td>{{$isi4k->pelayanan_gereja}}</td>
            </tr>
            <tr>
                <td>Seberapa sering anda membaca alkitab</td>
                <td>{{$isi4k->membaca_alkitab}}</td>
            </tr>
            <tr>
                <td>Berminat KMK</td>
                <td>{{$isi4k->berminat_kmk}}</td>
            </tr>
            <tr>
                <td>Adakah ayat pegangan?</td>
                <td>{{$isi4k->ayat_pegangan}}</td>
            </tr>
        </tbody>
    </table>
    @elseif($isi->agama = 'hindu' && $isi4h != NULL)
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Pertanyaan</th>
                <th>Jawaban</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Menurut pemahaman anda, apa hal yg paling esensi dari agama Hindu?</td>
                <td>{{$isi4h->pemahaman_agama_hindu}}</td>
            </tr>
            <tr>
                <td>Apa dasar agama Hindu yg anda ketahui?</td>
                <td>{{$isi4h->dasar_agama_hindu}}</td>
            </tr>
            <tr>
                <td>Apa tujuan anda melakukan Yadnya selama ini?</td>
                <td>{{$isi4h->tujuan_yadnya}}</td>
            </tr>
            <tr>
                <td>Pernahkah ada perasaan mengeluh dengan hal itu?</td>
                <td>{{$isi4h->pernahkah_mengeluh}}</td>
            </tr>
            <tr>
                <td>Apakah anda berminat bergabung dengan KMH</td>
                <td>{{$isi4h->berminat_kmh}}</td>
            </tr>
            <tr>
                <td>Menurut anda apa program yg bagus untuk organisasi Hindu kedepannya?</td>
                <td>{{$isi4h->saran_program}}</td>
            </tr>
        </tbody>
    </table>
    @elseif($isi->agama = 'buddha' && $isi4b != NULL)
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Pertanyaan</th>
                <th>Jawaban</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Apa yang anda ketahui tentang Agama Buddha?</td>
                <td>{{$isi4b->tentang_agama_budha}}</td>
            </tr>
            <tr>
                <td>Mengapa anda memilih Agama Buddha?</td>
                <td>{{$isi4b->memilih_agama_budha}}</td>
            </tr>
            <tr>
                <td>Apakah anda pernah mengikuti kelas Agama Buddha sebelumnya?</td>
                <td>{{$isi4b->kelas_agama_budha}}</td>
            </tr>
            <tr>
                <td>Apa yang anda ketahui tentang 4 hari besar Agama Buddha?</td>
                <td>{{$isi4b->hari_besar_budha}}</td>
            </tr>
            <tr>
                <td>Sebutkan dan jelaskan mengenai pancasila Buddhist!</td>
                <td>{{$isi4b->pancasila_buddhist}}</td>
            </tr>
        </tbody>
    </table>
    @endif
    <h3>Fasilitas Internet</h3>
    @if($isi5 != NULL)
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Pertanyaan</th>
                <th>Jawaban</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1. Apakah akses internet utama yang anda gunakan?</td>
                <td>{{$isi5->akses_internet}}</td>
            </tr>
            <tr>
                <td>Akses Internet Lainnya</td>
                <td>{{$isi5->lainnya}}</td>
            </tr>
            <tr>
                <td>2. Apakah akses tersebut unlimited?</td>
                <td>{{$isi5->unlimited}}</td>
            </tr>
            <tr>
                <td>3. Jika tidak, berapa pemakaian anda internet Anda dalam sebulan?</td>
                <td>{{$isi5->sebulan}}</td>
            </tr>
            <tr>
                <td>4. Kendala apa saja yang sering dialami selama anda menggunakan akses internet tersebut?</td>
                <td>{{$isi5->kendala}}</td>
            </tr>
            <tr>
                <td>5. Apakah akses internet tersebut lancar untuk video call dan streaming?</td>
                <td>{{$isi5->streaming}}</td>
            </tr>
            <tr>
                <td>6. Device pendukung keadaan kegiatan online yang dimiliki</td>
                <td><?php if($isi5->pc == 'on'){echo "PC, ";}?><?php if($isi5->laptop == 'on'){echo "Laptop, ";}?><?php if($isi5->smartphone == 'on'){echo "Smartphone, ";}?><?php if($isi5->tablet == 'on'){echo "Tablet, ";}?><?php if($isi5->lainnya2 == 'on'){echo "Lainnya";}?></td>
            </tr>
            <tr>
                <td>7. Apakah device tersebut memiliki kamera dan bisa digunakan untuk video call?</td>
                <td>{{$isi5->kamera}}</td>
            </tr>
            <tr>
                <td>8. Platform apa yang pernah kalian gunakan</td>
                <td><?php if($isi5->discord == 'on'){echo "Discord, ";}?><?php if($isi5->meet == 'on'){echo "Google Meet, ";}?><?php if($isi5->zoom == 'on'){echo "Zoom, ";}?><?php if($isi5->tidak_satupun == 'Tidak Satupun'){echo "PC,";}?></td>
            </tr>
            <tr>
                <td>9. Dari platform tersebut apakah ada kendala saat penggunaan?</td>
                <td>{{$isi5->kendala_penggunaan}}</td>
            </tr>
            <tr>
                <td>10. Zona waktu Indonesia bagian manakah kalian tinggal?</td>
                <td>{{$isi5->waktu}}</td>
            </tr>
            <tr>
                <td>11. Kegiatan rutin di rumah apa yang dapat mempengaruhi forum online yang diadakan?</td>
                <td>{{$isi5->kegiatan}}</td>
            </tr>
        </tbody>
    </table>
    @endif
</body>

</html>