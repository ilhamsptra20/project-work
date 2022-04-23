<a href="{{route('registrasi.create')}}">Tambah Data</a>
<table border="1px">
    <tr>
        <td>Nama</td>
        <td>Jenis Kelamin</td>
        <td>Agama</td>
        <td>No Hp</td>
        <td>Email</td>
        <td>Asal Sekolah</td>
        <td>Action</td>
    </tr>
    @foreach($registrasi as $data)
    <tr>
        <td>{{$data->nama}}</td>
        <?php
        if($data->jk =="L"){
        $jk = "Laki-laki";
        }else{
        $jk = "Perempuan";
        }
        ?>
        <td>{{$jk}}</td>
        <td>{{$data->agama}}</td>
        <td>{{$data->no_hp}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->asal_sekolah}}</td>
        <td>
            <a href="{{route('registrasi.edit',$data->id)}}">edit</a>
            <a href="{{url('registrasi/hapus',$data->id)}}">delete</a>
            <a href="/registrasi/{{$data->id}}">detail</a>
        </td>
    </tr>
    @endforeach
</table>