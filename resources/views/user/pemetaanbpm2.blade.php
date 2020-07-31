@extends('layouts.user')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        FORMULIR PEMETAAN ASPEK PEMBINAAN DAN PELATIHAN ANGGOTA KEMA FMIPA UNPAD 2020
                        @if ($message = Session::get('gagal'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif
                    </h2>
                </div>
                <div class="body clearfix" style="padding: 50px; padding-top:10px">
                    <div class="progress">
                        <div class="progress-bar bg-red progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        </div>
                    </div><br>
                    Terimakasih kamu telah memilih kegiatan pemetaan Internship Program BPM Kema FMIPA Unpad sebagai pilihan kedua.<br><br>

                    Sebelum kamu memilih Komisi/Deputi tempat kamu magang, ada baiknya kamu mengenal dengan membaca deskripsi singkat Komisi/Deputi dibawah ini :<br><br>

                    - Komisi 1 (Aspirasi dan Advokasi)<br>
                    Komisi ini merupakan bagian dari BPM Kema FMIPA Unpad yang bertanggung jawab untuk manampung aspirasi anggota Kema FMIPA Unpad yang kemudian dituangkan dalam rancangan GBHK dan Ketetapan Kema FMIPA Unpad serta bersama BEM Kema FMIPA Unpad dan atau lembaga lain menyampaikan aspirasi anggota kepada pihak berwenang.<br><br>
                    - Komisi 2 (Legislasi)<br>
                    Komisi ini merupakan bagian dari BPM Kema FMIPA Unpad yang bertanggung jawab untuk merekomendasi peraturan perundangan yang mengitak kelembagaan di Kema FMIPA Unpad. (AD/ART, Undang-undang, dan GBHK).<br><br>
                    - Komisi 3 (Pengawasan)<br>
                    Komisi ini merupakan bagian dari BPM Kema FMIPA Unpad yang bertanggung jawab untuk mengawasi, berkoordinasi, memberikan masukan dan pertimbangan, serta peringatan kepada BEM Kema FMIPA Unpad dalam pelaksanaan GBHK dan ketetapan Kongres Kema FMIPA Unpad. Bertanggungjawab untuk mengawasi dan berkoordinasi dengan Rohis Nuril Kema FMIPA Unpad dan UKM Kema FMIPA Unpad serta memberikan masukan. Bertanggung jawab untuk melakukan pengawasan keuangan Badan Kelengkapan Kema FMIPA Unpad tingkat fakultas.<br><br>
                    - Deputi Administrasi dan Rumah Tangga (ART)<br>
                    Deputi ART ini merupakan bagian dari BPM Kema FMIPA Unpad, memiliki fungsi terkait pelaksanaan dan pengelolaan administrasi (surat menyurat dan keuangan) serta inventaris BPM Kema FMIPA Unpad<br><br>
                    - Deputi Pengembangan Organisasi (PO)<br>
                    Deputi PO ini merupakan bagian dari BPM Kema FMIPA Unpad, memiliki fungsi untuk melakukan kegiatan-kegiatan untuk meningkatkan efektivitas kerja BPM Kema FMIPA Unpad dengan membuat sistem pemeliharaan, peningkatan kualitas, dan kinerja pengurus.<br><br>
                    - Deputi Media, Komunikasi, dan Informasi (Kominfo)<br>
                    Deputi Kominfo ini merupakan bagian dari BPM Kema FMIPA Unpad, memiliki fungsi dalam pengelolaan media informasi yang dimiliki BPM dan berperan dalam penyebaran informasi terkait tugas BPM serta hubungan dengan pihak luar.<br><br>

                    Setelah kamu mengenal bagian pekerjaan yang tersedia untuk tempat kamu bekerja, silahkan pilih dua bagian pekerjaan dengan pilihan pertama sebagai prioritas dan kedua adalah alternatif.<br><br>

                    <form id="form" action="/user/pemetaan/store/4" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="pilihan21">Pilihan 1</label>
                            <select id="pilihan21" name="pilihan21">
                                <option value="Komisi 1" <?php if ($pemetaan->pilihan21 == 'Komisi 1') : ?> selected <?php endif ?>>Komisi 1</option>
                                <option value="Komisi 2" <?php if ($pemetaan->pilihan21 == 'Komisi 2') : ?> selected <?php endif ?>>Komisi 2</option>
                                <option value="Komisi 3" <?php if ($pemetaan->pilihan21 == 'Komisi 3') : ?> selected <?php endif ?>>Komisi 3</option>
                                <option value="Deputi Administrasi dan Rumah Tangga" <?php if ($pemetaan->pilihan21 == 'Deputi Administrasi dan Rumah Tangga') : ?> selected <?php endif ?>>Deputi Administrasi dan Rumah Tangga</option>
                                <option value="Deputi Pengembang Organisasi" <?php if ($pemetaan->pilihan21 == 'Deputi Pengembang Organisasi') : ?> selected <?php endif ?>>Deputi Pengembang Organisasi</option>
                                <option value="Deputi Media, Komunikasi, dan Informasi" <?php if ($pemetaan->pilihan21 == 'Deputi Media, Komunikasi, dan Informasi') : ?> selected <?php endif ?>>Deputi Media, Komunikasi, dan Informasi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pilihan22">Pilihan 2</label>
                            <select id="pilihan22" name="pilihan22">
                                <option value="Komisi 1" <?php if ($pemetaan->pilihan22 == 'Komisi 1') : ?> selected <?php endif ?>>Komisi 1</option>
                                <option value="Komisi 2" <?php if ($pemetaan->pilihan22 == 'Komisi 2') : ?> selected <?php endif ?>>Komisi 2</option>
                                <option value="Komisi 3" <?php if ($pemetaan->pilihan22 == 'Komisi 3') : ?> selected <?php endif ?>>Komisi 3</option>
                                <option value="Deputi Administrasi dan Rumah Tangga" <?php if ($pemetaan->pilihan22 == 'Deputi Administrasi dan Rumah Tangga') : ?> selected <?php endif ?>>Deputi Administrasi dan Rumah Tangga</option>
                                <option value="Deputi Pengembang Organisasi" <?php if ($pemetaan->pilihan22 == 'Deputi Pengembang Organisasi') : ?> selected <?php endif ?>>Deputi Pengembang Organisasi</option>
                                <option value="Deputi Media, Komunikasi, dan Informasi" <?php if ($pemetaan->pilihan22 == 'Deputi Media, Komunikasi, dan Informasi') : ?> selected <?php endif ?>>Deputi Media, Komunikasi, dan Informasi</option>
                            </select>
                        </div>
                        <a href="{{url('/user/pemetaan/3')}}" class="btn btn-default m-t-15 waves-effect">Kembali</a>
                        <button type="submit" class="btn btn-danger m-t-15 waves-effect">Lanjut</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection