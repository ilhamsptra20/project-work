@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <a href="{{url('registrasi')}}"><- Back</a>

<form action="{{route('registrasi.update',$registrasi->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="{{$registrasi->nama}}">
    </div>
    <div>
        <label >Jenis Kelamin</label>
        <input type="radio" name="jk" value="L" {{ $registrasi->jk == 'L' ? 'checked' : ''}}>Laki-laki
        <input type="radio" name="jk" value="P" {{ $registrasi->jk == 'P' ? 'checked' : ''}}>Perempuan

    </div>
    <div>
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{$registrasi->tempat_lahir}}">
    </div>
    <div>
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{date('Y-m-d',strtotime($registrasi->tanggal_lahir))}}">
    </div>
    <div>
        <label for="status_martial">Status Martial</label>
        <input type="radio" name="status_martial" value="1" {{ $registrasi->status_martial == '1' ? 'checked' : ''}}>Sudah Menikah
        <input type="radio" name="status_martial" value="0" {{ $registrasi->status_martial == '0' ? 'checked' : ''}}>Belum Menikah
    </div>
    <div>
        <label for="kewarganegaraan">Kewarganegaraan</label>
        <select name="kewarganegaraan" id="kewarganegaraan">
            <option selected disabled>--Pilih Kewarganegaraan--</option>
            <option value="WNI" {{ $registrasi->kewarganegaraan == 'WNI' ? 'selected' : ''}}>WNI</option>
            <option value="WNA" {{ $registrasi->kewarganegaraan == 'WNA' ? 'selected' : ''}}>WNA</option>
        </select>
    </div>
    <div>
        <label for="agama">Agama</label>
        <input type="text" name="agama" id="agama" value="{{$registrasi->agama}}">
    </div>
    <div>
        <label for="alamat_tempat_tinggal">Alamat Tempat Tinggal</label>
        <!-- <textarea name="alamat_tempat_tinggal" id="alamat_tempat_tinggal" cols="10" rows="10">{{$registrasi->alamat_tempat_tinggal}}</textarea> -->
        <input type="text" name="alamat_tempat_tinggal" id="alamat_tempat_tinggal" value="{{$registrasi->alamat_tempat_tinggal}}">
    </div>
    <div>
        <label for="no_hp">No Hp</label>
        <input type="text" name="no_hp" id="no_hp" value="{{$registrasi->no_hp}}">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{$registrasi->email}}">
    </div>
    <div>
        <label for="no_telp">No Telp</label>
        <input type="text" name="no_telp" id="no_telp" value="{{$registrasi->no_telp}}">
    </div>
    <div>
        <label for="asal_sekolah">Asal Sekolah</label>
        <select name="asal_sekolah" id="asal_sekolah">
            <option selected disabled>--Pilih Asal Sekolah--</option>
            <option value="SMA" {{ $registrasi->asal_sekolah == 'SMA' ? 'selected' : ''}}>SMA</option>
            <option value="SMK" {{ $registrasi->asal_sekolah == 'SMK' ? 'selected' : ''}}>SMK</option>
        </select>
        <!-- <input type="text" name="asal_sekolah" id="asal_sekolah"> -->
    </div>
    <div>
        <label for="jurusan">Jurusan</label>
        <input type="text" name="jurusan" id="jurusan" value="{{$registrasi->jurusan}}">
    </div>
    <div>
        <label for="nama_sekolah">Nama Sekolah</label>
        <input type="text" name="nama_sekolah" id="nama_sekolah" value="{{$registrasi->nama_sekolah}}">
    </div>
    <div>
        <label for="tahun_lulus">Tahun Lulus</label>
        <input type="text" name="tahun_lulus" id="tahun_lulus" value="{{$registrasi->tahun_lulus}}">
    </div>
    <div>
        <label for="no_ijazah">No Ijazah</label>
        <input type="text" name="no_ijazah" id="no_ijazah" value="{{$registrasi->no_ijazah}}">
    </div>
    <div>
        <label for="alamat_sekolah">Alamat Sekolah</label>
        <input type="text" name="alamat_sekolah" id="alamat_sekolah" value="{{$registrasi->alamat_sekolah}}">
    </div>
    <div>
        <label for="nama_orangtua">Nama Orang Tua</label>
        <input type="text" name="nama_orangtua" id="nama_orangtua" value="{{$registrasi->nama_orangtua}}">
    </div>
    <div>
        <label for="no_hp_orangtua">No Hp Orang Tua</label>
        <input type="text" name="no_hp_orangtua" id="no_hp_orangtua" value="{{$registrasi->no_hp_orangtua}}">
    </div>
    <div>
        <label for="email_orangtua">Email Orang Tua</label>
        <input type="email" name="email_orangtua" id="email_orangtua" value="{{$registrasi->email_orangtua}}">
    </div>
    <div>
        <label for="pekerjaan_orangtua">Pekerjaan Orang Tua</label>
        <input type="text" name="pekerjaan_orangtua" id="pekerjaan_orangtua" value="{{$registrasi->pekerjaan_orangtua}}">
    </div>
    <div>
        <label for="nama_instansi_orangtua">Nama Instansi Orang Tua</label>
        <input type="text" name="nama_instansi_orangtua" id="nama-instansi_orangtua" value="{{$registrasi->nama_instansi_orangtua}}">
    </div>
    <div>
        <label for="pendidikan_orangtua">Pendidikan Orang Tua</label>
        <input type="text" name="pendidikan_orangtua" id="pendidikan_orangtua" value="{{$registrasi->pendidikan_orangtua}}">
    </div>
    <button type="submit">update</button>
</form>