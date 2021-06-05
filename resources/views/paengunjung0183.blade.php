<a href="/pengunjung/tambah"><button>Tambah Pengunjung</button></a>
    <table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>   
            </tr>
        </thead>
        <tbody>
            @foreach($pengunjung as $Pengunjung)
            <tr>
                <td style= "text-align:center;">{{$Pengunjung-->id}}</td>
                <td>{{$Pengunjung->nama}}</td>
                <td>{{$pengunjung->alamat}}</td>
            </tr>
           @endforeach
        </tbody>
    </table>
@endsection