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

<form action="{{route('dosen.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="nip">NIP</label>
        <input type="text" name="nip" id="nip">
    </div>
    <div>
        <label for="name">Nama</label>
        <input type="text" name="name" id="name"data-constraints="@Required ">
    </div>
    <div>
        <label for="no_hp">No Hp</label>
        <input type="text" name="no_hp" id="no_hp">
    </div>
    <div>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>
    <button type="submit">simpan</button>
</form>
