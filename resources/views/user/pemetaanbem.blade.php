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
                        <div class="progress-bar bg-red progress-bar-striped active" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                        </div>
                    </div><br>
                    Terimakasih kamu telah memilih kegiatan pemetaan Internship Program BEM Kema FMIPA Unpad sebagai pilihan pertama.<br><br>

                    Sebelum kamu memilih Biro/Departemen tempat kamu magang, ada baiknya kamu mengenal dengan membaca deskripsi singkat Biro/Departemen dibawah ini :<br><br>

                    <br>- Biro Kesekretariatan<br>
                    Biro ini merupakan bagian dari BEM KEMA FMIPA Unpad yang bertanggungjawab terhadap sistem dan regulasi administrasi organisasi. Biro ini pula mengurusi administrasi dan inventarisasi BEM KEMA FMIPA Unpad. Seperti membuat proposal program kerja, meangrsipkan surat-surat dan dokumen lainnya, menjaga inventaris BEM dan berkoordinasi dengan dekanat FMIPA Unpad.<br>
                    <br>- Biro Keuangan<br>
                    Biro ini merupakan bagian dari BEM KEMA FMIPA Unpad yang bertanggungjawab terhadap system dan regulasi keuangan organisasi seperti halnya pelaporan keuangan, fungsi pengurusan keuangan dan berkoordinasi dengan pihak dekanat FMIPA Unpad.<br>
                    <br>- Biro Pengembangan Internal dan Organisasi<br>
                    Biro ini merupakan bagian dari BEM KEMA FMIPA Unpad yang bertanggungjawab terhadap stabilitas kinerja BEM Kema FMIPA Unpad seperti halnya mengontrol dan mengevaluasi kinerja anggota BEM Kema FMIPA Unpad dan memberikan apresiasi kepada pengurus BEM Kema FMIPA Unpad.<br>
                    <br>- Biro Kewirausahaan<br>
                    Biro ini merupakan bagian dari BEM Kema FMIPA Unpad yang bertanggungjawab mengembangkan usaha mandiri BEM Kema FMIPA Unpad yang stabil dan kontinu seperti halnya melakukan kegiatan yang menghasilkan profit bagi BEM dan memaksimalkan sumber dana untuk pembendaharaan BEM.<br>
                    <br>- Departemen Kaderisasi<br>
                    Departemen ini merupakan bagian dari BEM Kema FMIPA Unpad yang bertanggungjawab melaksanakan proses kaderisasi yang sesuai dengan UU pembinaan yang ada di Kema MIPA dan pengembangan potensi keorganisasian warga kema FMIPA Unpad seperti halnya merancang dan melaksanakan program kerja MIPA Bersatu dan Pelatihan Kepemimpinan.<br>
                    <br>- Departemen Olahraga, Seni, dan Budaya<br>
                    Departemen ini merupakan bagian dari BEM Kema FMIPA Unpad yang bertanggungjawab memfasilitasi wadah pengembangan potensi olahraga, seni dan keterampilan lainnya warga Kema FMIPA Unpad. Departemen ini juga berkoordinasi dengan UKM dan KKM yang ada di MIPA.<br>
                    <br>- Departemen Akademik dan Penalaran<br>
                    Departemen ini merupakan bagian dari BEM Kema FMIPA Unpad yang bertanggung jawab memfasilitasi dan mengembangkan potensi warga Kema FMIPA Unpad di bidang akademik dan penalaran. Departemen ini juga mendata dan mencetak mahasiswa berprestasi di kema FMIPA Unpad<br>
                    <br>- Departemen Sosial Kemasyarakatan<br>
                    Departemen ini merupakan bagian dari BEM Kema FMIPA Unpad yang bertanggungjawab mengoptimalkan pelaksanaan serta mengevaluasi metode pengabdian kepada masyarakat dan juga departemen ini mengawal, mengkaji serta menyikapi isu lingkungan yang ada di sekitar Kema FMIPA Unpad.<br>
                    <br>- Departemen Advokasi Pelayanan Mahasiswa<br>
                    Departemen ini merupakan bagian dari BEM Kema FMIPA Unpad yang bertanggung jawab mengadvokasikan aspirasi mahasiswa dan mendampingi keluhan atau masalah khususnya yang berkaitan dengan kegiatan perkuliahan salah satunya dalam hal finansial anggota (UKT)<br>
                    <br>- Departemen Kajian dan Aksi Strategis<br>
                    Departemen ini merupakan bagian dari BEM Kema FMIPA Unpad yang bertanggungjawab mengkaji, menganalisis dan menyikapi isu-isu politik yang ada di MIPA, Unpad atau nasional.<br>
                    <br>- Departemen Media Informasi<br>
                    Departemen ini merupakan bagian dari BEM Kema FMIPA Unpad yang menjadi garda terdepan estetika media BEM Kema FMIPA Unpad. Departemen ini bertanggungjawab mengoptimalkan serta mengelola media social BEM Kema FMIPA Unpad dan segala macam bentuk publikasi<br>
                    <br>- Departemen Hubungan Internal<br>
                    Departemen ini merupakan bagian dari BEM Kema FMIPA Unpad yang bertanggungjawab menjalin komunikasi dan koordinasi dengan lembaga yang ada di Kema FMIPA Unpad dan juga menyediakan wadah kumpul untuk kema FMIPA Unpad<br>
                    <br>- Departemen Hubungan Eksternal<br>
                    Departemen ini merupakan bagian dari BEM Kema FMIPA Unpad yang bertanggungjawab menjalin komunikasi dan koordinasi dengan lembaga yang ada di luar Kema FMIPA Unpad (ILMIPA, BEM Kema Unpad, IKA FMIPA Unpad, dll)<br>
                    <br>- Departemen Pusat Data Teknologi<br>
                    Departemen ini merupakan bagian dari BEM Kema FMIPA Unpad yang bertanggungjawab menghimpun database yang diperlukan, menyediakan sarana untuk warga Kema FMIPA Unpad dalam mengakses data Kema FMIPA Unpad dan melakukan survey untuk bahan pengkajian yang dibutuhkan oleh BEM Kema FMIPA Unpad.<br><br>

                    Setelah kamu mengenal Biro/Departemen yang tersedia untuk tempat kamu magang, silahkan pilih dua Biro/Departemen dengan pilihan pertama sebagai prioritas dan kedua adalah alternatif.<br><br>

                    <form id="form" action="/user/pemetaan/store/2" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="pilihan11">Pilihan 1</label>
                            <select id="pilihan11" name="pilihan11">
                                <option value="Biro Kesekretariatan" <?php if ($pemetaan->pilihan11 == 'Biro Kesekretariatan') : ?> selected <?php endif ?>>Biro Kesekretariatan</option>
                                <option value="Biro Keuangan" <?php if ($pemetaan->pilihan11 == 'Biro Keuangan') : ?> selected <?php endif ?>>Biro Keuangan</option>
                                <option value="Biro Kewirausahaan" <?php if ($pemetaan->pilihan11 == 'Biro Kewirausahaan') : ?> selected <?php endif ?>>Biro Kewirausahaan</option>
                                <option value="Biro Pengembangan Internal Organisasi" <?php if ($pemetaan->pilihan11 == 'Biro Pengembangan Internal Organisasi') : ?> selected <?php endif ?>>Biro Pengembangan Internal Organisasi</option>
                                <option value="Departemen Kaderisasi" <?php if ($pemetaan->pilihan11 == 'Departemen Kaderisasi') : ?> selected <?php endif ?>>Departemen Kaderisasi</option>
                                <option value="Departemen Olahraga, Seni, dan Budaya" <?php if ($pemetaan->pilihan11 == 'Departemen Olahraga, Seni, dan Budaya') : ?> selected <?php endif ?>>Departemen Olahraga, Seni, dan Budaya</option>
                                <option value="Departemen Akademik dan Penalaran" <?php if ($pemetaan->pilihan11 == 'Departemen Akademik dan Penalaran') : ?> selected <?php endif ?>>Departemen Akademik dan Penalaran</option>
                                <option value="Departemen Sosial Kemasyarakatan" <?php if ($pemetaan->pilihan11 == 'Departemen Sosial Kemasyarakatan') : ?> selected <?php endif ?>>Departemen Sosial Kemasyarakatan</option>
                                <option value="Departemen Kajian dan Aksi Strategis" <?php if ($pemetaan->pilihan11 == 'Departemen Kajian dan Aksi Strategis') : ?> selected <?php endif ?>>Departemen Kajian dan Aksi Strategis</option>
                                <option value="Departemen Advokasi dan Pelayanan Mahasiswa" <?php if ($pemetaan->pilihan11 == 'Departemen Advokasi dan Pelayanan Mahasiswa') : ?> selected <?php endif ?>>Departemen Advokasi dan Pelayanan Mahasiswa</option>
                                <option value="Departemen Media Informasi" <?php if ($pemetaan->pilihan11 == 'Departemen Media Informasi') : ?> selected <?php endif ?>>Departemen Media Informasi</option>
                                <option value="Departemen Hubungan Internal" <?php if ($pemetaan->pilihan11 == 'Departemen Hubungan Internal') : ?> selected <?php endif ?>>Departemen Hubungan Internal</option>
                                <option value="Departemen Hubungan Eksternal" <?php if ($pemetaan->pilihan11 == 'Departemen Hubungan Eksternal') : ?> selected <?php endif ?>>Departemen Hubungan Eksternal</option>
                                <option value="Departemen Pusat Data Teknologi" <?php if ($pemetaan->pilihan11 == 'Departemen Pusat Data Teknologi') : ?> selected <?php endif ?>>Departemen Pusat Data Teknologi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pilihan12">Pilihan 2</label>
                            <select id="pilihan12" name="pilihan12">
                                <option value="Biro Kesekretariatan" <?php if ($pemetaan->pilihan12 == 'Biro Kesekretariatan') : ?> selected <?php endif ?>>Biro Kesekretariatan</option>
                                <option value="Biro Keuangan" <?php if ($pemetaan->pilihan12 == 'Biro Keuangan') : ?> selected <?php endif ?>>Biro Keuangan</option>
                                <option value="Biro Kewirausahaan" <?php if ($pemetaan->pilihan12 == 'Biro Kewirausahaan') : ?> selected <?php endif ?>>Biro Kewirausahaan</option>
                                <option value="Biro Pengembangan Internal Organisasi" <?php if ($pemetaan->pilihan12 == 'Biro Pengembangan Internal Organisasi') : ?> selected <?php endif ?>>Biro Pengembangan Internal Organisasi</option>
                                <option value="Departemen Kaderisasi" <?php if ($pemetaan->pilihan12 == 'Departemen Kaderisasi') : ?> selected <?php endif ?>>Departemen Kaderisasi</option>
                                <option value="Departemen Olahraga, Seni, dan Budaya" <?php if ($pemetaan->pilihan12 == 'Departemen Olahraga, Seni, dan Budaya') : ?> selected <?php endif ?>>Departemen Olahraga, Seni, dan Budaya</option>
                                <option value="Departemen Akademik dan Penalaran" <?php if ($pemetaan->pilihan12 == 'Departemen Akademik dan Penalaran') : ?> selected <?php endif ?>>Departemen Akademik dan Penalaran</option>
                                <option value="Departemen Sosial Kemasyarakatan" <?php if ($pemetaan->pilihan12 == 'Departemen Sosial Kemasyarakatan') : ?> selected <?php endif ?>>Departemen Sosial Kemasyarakatan</option>
                                <option value="Departemen Kajian dan Aksi Strategis" <?php if ($pemetaan->pilihan12 == 'Departemen Kajian dan Aksi Strategis') : ?> selected <?php endif ?>>Departemen Kajian dan Aksi Strategis</option>
                                <option value="Departemen Advokasi dan Pelayanan Mahasiswa" <?php if ($pemetaan->pilihan12 == 'Departemen Advokasi dan Pelayanan Mahasiswa') : ?> selected <?php endif ?>>Departemen Advokasi dan Pelayanan Mahasiswa</option>
                                <option value="Departemen Media Informasi" <?php if ($pemetaan->pilihan12 == 'Departemen Media Informasi') : ?> selected <?php endif ?>>Departemen Media Informasi</option>
                                <option value="Departemen Hubungan Internal" <?php if ($pemetaan->pilihan12 == 'Departemen Hubungan Internal') : ?> selected <?php endif ?>>Departemen Hubungan Internal</option>
                                <option value="Departemen Hubungan Eksternal" <?php if ($pemetaan->pilihan12 == 'Departemen Hubungan Eksternal') : ?> selected <?php endif ?>>Departemen Hubungan Eksternal</option>
                                <option value="Departemen Pusat Data Teknologi" <?php if ($pemetaan->pilihan12 == 'Departemen Pusat Data Teknologi') : ?> selected <?php endif ?>>Departemen Pusat Data Teknologi</option>
                            </select>
                        </div>
                        <a href="{{url('/user/pemetaan/1')}}" class="btn btn-default m-t-15 waves-effect">Kembali</a>
                        <button type="submit" class="btn btn-danger m-t-15 waves-effect">Lanjut</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection