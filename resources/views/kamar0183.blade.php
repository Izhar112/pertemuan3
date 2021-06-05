<form method="post" action="/kamar/filter">
    @csrf
<label >Filter Alamat : </label>
<select name="alamat">
    @foreach(DB::table('pengunjung')->select('alamat')->groupby('alamat')->get() as $alamat)
        <option value="{{$alamat->alamat}}">{{$alamat->alamat}}</option>
    @endforeach
</select>
<button name="submit">Tampilkan</button>
</form>
    <table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Admin</th>  
                <th scope="col">Nama Pengunjung</th>
                <th scope="col">Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kamar as $Kamar)
            <tr>
                <td style= "text-align:center;">{{$Kamar->id}}</td>
                <td>{{$Kamar->nama_Admin}}</td>
                <td>{{$Kamar->nama_pengunjung}}</td>
                <td>{{$Kamar->alamat}}</td>
            </tr>
           @endforeach
        </tbody>
    </table>
@endsection