<table>
    <thead>
        <tr>
            <th>NPM</th>
            <th>Nama Lengkap</th>
            <th>Nama Panggilan</th>
            <th>Foto</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>Agama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Anak ke-</th>
            <th>Bersaudara</th>
            <th>Nama Ayah</th>
            <th>Pekerjaan Ayah</th>
            <th>No Telpon Ayah</th>
            <th>Nama Ibu</th>
            <th>Pekerjaan Ibu</th>
            <th>No Telpon Ibu</th>
            <th>Kegemaran/Hobi</th>
            <th>No Hp Pribadi</th>
            <th>Golongan Darah</th>
            <th>Tekanan Darah</th>
            <th>Tinggi Badan</th>
            <th>Berat Badan</th>
            <th>Email</th>
            <th>Alamat Rumah</th>
            <th>Telp Rumah</th>
            <th>Alamat Kos</th>
            <th>Telp Kos</th>
            <th>Nama TK</th>
            <th>Kota</th>
            <th>Tahun</th>
            <th>Nama SD</th>
            <th>Kota</th>
            <th>Tahun</th>
            <th>Nama SMP</th>
            <th>Kota</th>
            <th>Tahun</th>
            <th>Nama SMA</th>
            <th>Kota</th>
            <th>Tahun</th>
            <th>Nama PT</th>
            <th>Kota</th>
            <th>Tahun</th>
            <th>Nama Organisasi (_,_,_)</th>
            <th>Jabatan (_,_,_)</th>
            <th>Tahun (_,_,_)</th>
            <th>Prestasi (_,_,_)</th>
            <th>Lembaga (_,_,_)</th>
            <th>Tahun (_,_,_)</th>
        </tr>
    </thead>
    <tbody>
        @foreach($wawancara as $w)
        <tr>
            <td>{{ $w->npm }}</td>
            <td>{{ $w->nama }}</td>
            <td>{{ $w->nama_panggilan }}</td>
            <td></td>
            <td>{{ $w->jenis_kelamin }}</td>
            <td>{{ $w->jurusan }}</td>
            <td>{{ $w->agama }}</td>
            <td>{{ $w->tempat_lahir }}</td>
            <td>{{ $w->tanggal_lahir }}</td>
            <td>{{ $w->anak_ke }}</td>
            <td>{{ $w->bersaudara }}</td>
            <td>{{ $w->nama_ayah }}</td>
            <td>{{ $w->pekerjaan_ayah }}</td>
            <td>{{ $w->telp_ayah }}</td>
            <td>{{ $w->nama_ibu }}</td>
            <td>{{ $w->pekerjaan_ibu }}</td>
            <td>{{ $w->telp_ibu }}</td>
            <td>{{ $w->hobi }}</td>
            <td>{{ $w->nohp }}</td>
            <td>{{ $w->golongan_darah }}</td>
            <td>{{ $w->tekanan_darah }}</td>
            <td>{{ $w->tinggi_badan }}</td>
            <td>{{ $w->berat_badan }}</td>
            <td>{{ $w->email }}</td>
            <td>{{ $w->alamat_rumah }}</td>
            <td>{{ $w->telp_rumah }}</td>
            <td>{{ $w->alamat_kost }}</td>
            <td>{{ $w->telp_kost }}</td>
            <td>{{ $w->nama_tk }}</td>
            <td>{{ $w->kota_tk }}</td>
            <td>{{ $w->tahun_tk }}</td>
            <td>{{ $w->nama_sd }}</td>
            <td>{{ $w->kota_sd }}</td>
            <td>{{ $w->tahun_sd }}</td>
            <td>{{ $w->nama_smp }}</td>
            <td>{{ $w->kota_smp }}</td>
            <td>{{ $w->tahun_smp }}</td>
            <td>{{ $w->nama_sma }}</td>
            <td>{{ $w->kota_sma }}</td>
            <td>{{ $w->tahun_sma }}</td>
            <td>{{ $w->nama_pt }}</td>
            <td>{{ $w->kota_pt }}</td>
            <td>{{ $w->tahun_pt }}</td>
            <td>{{ $w->nama_organisasi1 }}, {{ $w->nama_organisasi2 }}, {{ $w->nama_organisasi3 }}, {{ $w->nama_organisasi4 }}, {{ $w->nama_organisasi5 }}</td>
            <td>{{ $w->jabatan1 }}, {{ $w->jabatan2 }}, {{ $w->jabatan3 }}, {{ $w->jabatan4 }}, {{ $w->jabatan5 }}</td>
            <td>{{ $w->tahun1 }}, {{ $w->tahun2 }}, {{ $w->tahun3 }}, {{ $w->tahun4 }}, {{ $w->tahun5 }}</td>
            <td>{{ $w->prestasi1 }}, {{ $w->prestasi2 }}, {{ $w->prestasi3 }}, {{ $w->prestasi4 }}, {{ $w->prestasi5 }}</td>
            <td>{{ $w->lembaga1 }}, {{ $w->lembaga2 }}, {{ $w->lembaga3 }}, {{ $w->lembaga4 }}, {{ $w->lembaga5 }}</td>
            <td>{{ $w->tahunp1 }}, {{ $w->tahunp2 }}, {{ $w->tahunp3 }}, {{ $w->tahunp4 }}, {{ $w->tahunp5 }},</td>
        </tr>
        @endforeach
    </tbody>
</table>