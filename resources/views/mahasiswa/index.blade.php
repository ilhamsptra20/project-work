<a href="{{route('data_mahasiswa.create')}}">Tambah Data</a>
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
    @foreach($mahasiswa as $data)
    <tr>
        <td>{{$data->nama}}</td>
        <td>{{$data->jk}}</td>
        <td>{{$data->agama}}</td>
        <td>{{$data->no_hp}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->asal_sekolah}}</td>
    </tr>
    @endforeach
</table>