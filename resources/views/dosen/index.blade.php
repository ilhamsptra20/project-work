<a href="{{route('dosen.create')}}">Tambah data</a>
<table border="1px">
    <tr>
        <td>NIP</td>
        <td>Nama</td>
        <td>No Hp</td>
        <td>Alamat</td>
        <td>Email</td>
        <td>Action</td>
    </tr>
    @foreach($dosen as $data)
    <tr>
        <td>{{$data->nip}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->no_hp}}</td>
        <td>{{$data->alamat}}</td>
        <td>{{$data->email}}</td>
        <td>
            <a href="{{route('dosen.edit',$data->nip)}}">edit</a>
            <a href="{{url('dosen/hapus',$data->nip)}}">delete</a>
        </td>
    </tr>
    @endforeach
</table>