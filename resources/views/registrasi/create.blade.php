<form action="{{route('registrasi.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
    </div>
    <div>
        <label >Jenis Kelamin</label>
        <input type="radio" name="jk" value="L">Laki-laki
        <input type="radio" name="jk" value="P">Perempuan

    </div>
    <div>
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" id="tempat_lahir">
    </div>
    <div>
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir">
    </div>
    <div>
        <label for="status_martial">Status Martial</label>
        <input type="radio" name="status_martial" value="1" >Sudah Menikah
        <input type="radio" name="status_martial" value="0" >Belum Menikah
    </div>
    <div>
        <label for="kewarganegaraan">Kewarganegaraan</label>
        <select name="kewarganegaraan" id="kewarganegaraan">
            <option value="WNI">WNI</option>
            <option value="WNA">WNA</option>
        </select>
    </div>
    <div>
        <label for="agama">Agama</label>
        <input type="text" name="agama" id="agama">
    </div>
    <div>
        <label for="alamat_tempat_tinggal">Alamat Tempat Tinggal</label>
        <input type="text" name="alamat_tempat_tinggal" id="alamat_tempat_tinggal">
    </div>
    <div>
        <label for="no_hp">No Hp</label>
        <input type="text" name="no_hp" id="no_hp">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="no_telp">No Telp</label>
        <input type="text" name="no_telp" id="no_telp">
    </div>
    <div>
        <label for="asal_sekolah">Asal Sekolah</label>
        <select name="asal_sekolah" id="asal_sekolah">
            <option value="SMA">SMA</option>
            <option value="SMK">SMK</option>
        </select>
        <!-- <input type="text" name="asal_sekolah" id="asal_sekolah"> -->
    </div>
    <div>
        <label for="jurusan">Jurusan</label>
        <input type="text" name="jurusan" id="jurusan">
    </div>
    <div>
        <label for="nama_sekolah">Nama Sekolah</label>
        <input type="text" name="nama_sekolah" id="nama_sekolah">
    </div>
    <div>
        <label for="tahun_lulus">Tahun Lulus</label>
        <input type="text" name="tahun_lulus" id="tahun_lulus">
    </div>
    <div>
        <label for="no_ijazah">No Ijazah</label>
        <input type="text" name="no_ijazah" id="no_ijazah">
    </div>
    <div>
        <label for="alamat_sekolah">Alamat Sekolah</label>
        <input type="text" name="alamat_sekolah" id="alamat_sekolah">
    </div>
    <div>
        <label for="nama_orangtua">Nama Orang Tua</label>
        <input type="text" name="nama_orangtua" id="nama_orangtua">
    </div>
    <div>
        <label for="no_hp_orangtua">No Hp Orang Tua</label>
        <input type="text" name="no_hp_orangtua" id="no_hp_orangtua">
    </div>
    <div>
        <label for="email_orangtua">Email Orang Tua</label>
        <input type="email" name="email_orangtua" id="email_orangtua">
    </div>
    <div>
        <label for="pekerjaan_orangtua">Pekerjaan Orang Tua</label>
        <input type="text" name="pekerjaan_orangtua" id="pekerjaan_orangtua">
    </div>
    <div>
        <label for="nama-instansi_orangtua">Nama Instansi Orang Tua</label>
        <input type="text" name="nama_instansi_orangtua" id="nama-instansi_orangtua">
    </div>
    <div>
        <label for="pendidikan_orangtua">Pendidikan Orang Tua</label>
        <input type="text" name="pendidikan_orangtua" id="pendidikan_orangtua">
    </div>
    <button type="submit">update</button>
</form>