<a href="{{url('registrasi')}}"><- Back</a>

<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{$registrasi->nama}}</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <?php
            if($registrasi->jk=="P"){
                $jk = "Perempuan";
            }else{
                $jk = "Laki-laki";
            }
        ?>
        <td>{{$jk}}</td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td>{{$registrasi->tanggal_lahir}}</td>
    </tr>
    <tr>
        <td>Status Martial</td>
        <td>:</td>
        <?php
            if($registrasi->status_martial=="1"){
                $sm = "Sudah Menikah";
            }else{
                $sm = "Belum Menikah";
            }
        ?>
        <td>{{$sm}}</td>
    </tr>
    <tr>
        <td>Kewarganegaraan</td>
        <td>:</td>
        <td>{{$registrasi->kewarganegaraan}}</td>
    </tr>
    <tr>
        <td>Agama</td>
        <td>:</td>
        <td>{{$registrasi->agama}}</td>
    </tr>
    <tr>
        <td>Alamat Tempat Tinggal</td>
        <td>:</td>
        <td>{{$registrasi->alamat_tempat_tinggal}}</td>
    </tr>
    <tr>
        <td>No Hp</td>
        <td>:</td>
        <td>{{$registrasi->no_hp}}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td>{{$registrasi->email}}</td>
    </tr>
    <tr>
        <td>No Telp</td>
        <td>:</td>
        <td>{{$registrasi->no_telp}}</td>
    </tr>
    <tr>
        <td>Asal Sekolah</td>
        <td>:</td>
        <td>{{$registrasi->asal_sekolah}}</td>
    </tr>
    <tr>
        <td>jurusan</td>
        <td>:</td>
        <td>{{$registrasi->jurusan}}</td>
    </tr>
    <tr>
        <td>nama_sekolah</td>
        <td>:</td>
        <td>{{$registrasi->nama_sekolah}}</td>
    </tr>
    <tr>
        <td>tahun_lulus</td>
        <td>:</td>
        <td>{{$registrasi->tahun_lulus}}</td>
    </tr>
    <tr>
        <td>no_ijazah</td>
        <td>:</td>
        <td>{{$registrasi->no_ijazah}}</td>
    </tr>
    <tr>
        <td>alamat_sekolah</td>
        <td>:</td>
        <td>{{$registrasi->alamat_sekolah}}</td>
    </tr>
    <tr>
        <td>nama_orangtua</td>
        <td>:</td>
        <td>{{$registrasi->nama_orangtua}}</td>
    </tr>
    <tr>
        <td>no_hp_orangtua</td>
        <td>:</td>
        <td>{{$registrasi->no_hp_orangtua}}</td>
    </tr>
    <tr>
        <td>email_orangtua</td>
        <td>:</td>
        <td>{{$registrasi->email_orangtua}}</td>
    </tr>
    <tr>
        <td>pekerjaan_orangtua</td>
        <td>:</td>
        <td>{{$registrasi->pekerjaan_orangtua}}</td>
    </tr>
    <tr>
        <td>pekerjaan_orangtua</td>
        <td>:</td>
        <td>{{$registrasi->pekerjaan_orangtua}}</td>
    </tr>
    <tr>
        <td>nama_instansi_orangtua</td>
        <td>:</td>
        <td>{{$registrasi->nama_instansi_orangtua}}</td>
    </tr>
    <tr>
        <td>pendidikan_orangtua</td>
        <td>:</td>
        <td>{{$registrasi->pendidikan_orangtua}}</td>
    </tr>
</table>