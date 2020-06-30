<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWawancaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wawancara', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 128);
            $table->string('nama_panggilan', 128);
            $table->string('jenis_kelamin', 128);
            $table->string('npm', 128)->unique();
            $table->string('jurusan', 128);
            $table->string('agama', 128);
            $table->string('tempat_lahir', 128);
            $table->string('tanggal_lahir', 128);
            $table->string('anak_ke', 128);
            $table->string('bersaudara', 128);
            $table->string('foto', 128);
            $table->string('nama_ayah', 128);
            $table->string('pekerjaan_ayah', 128);
            $table->string('telp_ayah', 128);
            $table->string('nama_ibu', 128);
            $table->string('pekerjaan_ibu', 128);
            $table->string('telp_ibu', 128);
            $table->string('hobi', 128);
            $table->string('nohp', 128);
            $table->string('golongan_darah', 128);
            $table->string('tekanan_darah', 128);
            $table->string('berat_badan', 128);
            $table->string('tinggi_badan', 128);
            $table->string('email', 128);
            $table->string('alamat_rumah', 128);
            $table->string('telp_rumah', 128);
            $table->string('alamat_kost', 128)->nullable();
            $table->string('telp_kost', 128)->nullable();
            $table->string('nama_tk', 128)->nullable();
            $table->string('kota_tk', 128)->nullable();
            $table->string('tahun_tk', 128)->nullable();
            $table->string('nama_sd', 128);
            $table->string('kota_sd', 128);
            $table->string('tahun_sd', 128);
            $table->string('nama_smp', 128);
            $table->string('kota_smp', 128);
            $table->string('tahun_smp', 128);
            $table->string('nama_sma', 128);
            $table->string('kota_sma', 128);
            $table->string('tahun_sma', 128);
            $table->string('nama_pt', 128)->nullable();
            $table->string('kota_pt', 128)->nullable();
            $table->string('tahun_pt', 128)->nullable();
            $table->string('nama_organisasi1', 128)->nullable();
            $table->string('jabatan1', 128)->nullable();
            $table->string('tahun1', 128)->nullable();
            $table->string('nama_organisasi2', 128)->nullable();
            $table->string('jabatan2', 128)->nullable();
            $table->string('tahun2', 128)->nullable();
            $table->string('nama_organisasi3', 128)->nullable();
            $table->string('jabatan3', 128)->nullable();
            $table->string('tahun3', 128)->nullable();
            $table->string('nama_organisasi4', 128)->nullable();
            $table->string('jabatan4', 128)->nullable();
            $table->string('tahun4', 128)->nullable();
            $table->string('nama_organisasi5', 128)->nullable();
            $table->string('jabatan5', 128)->nullable();
            $table->string('tahun5', 128)->nullable();
            $table->string('prestasi1', 128)->nullable();
            $table->string('lembaga1', 128)->nullable();
            $table->string('tahunp1', 128)->nullable();
            $table->string('prestasi2', 128)->nullable();
            $table->string('lembaga2', 128)->nullable();
            $table->string('tahunp2', 128)->nullable();
            $table->string('prestasi3', 128)->nullable();
            $table->string('lembaga3', 128)->nullable();
            $table->string('tahunp3', 128)->nullable();
            $table->string('prestasi4', 128)->nullable();
            $table->string('lembaga4', 128)->nullable();
            $table->string('tahunp4', 128)->nullable();
            $table->string('prestasi5', 128)->nullable();
            $table->string('lembaga5', 128)->nullable();
            $table->string('tahunp5', 128)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wawancara');
    }
}
