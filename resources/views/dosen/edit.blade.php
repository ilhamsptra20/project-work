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
<form action="{{route('dosen.update',$dosen->nip)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label for="nip">NIP</label>
        <input type="text" name="nip" id="nip" value="{{$dosen->nip}}">
    </div>
    <div>
        <label for="name">Nama</label>
        <input type="text" name="name" id="name" value="{{$dosen->name}}">
    </div>
    <div>
        <label for="no_hp">No Hp</label>
        <input type="text" name="no_hp" id="no_hp" value="{{$dosen->no_hp}}">
    </div>
    <div>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" value="{{$dosen->alamat}}">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{$dosen->email}}">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="{{$dosen->password}}">
    </div>
    <button type="submit">update</button>
</form>