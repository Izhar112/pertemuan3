
<form method="post" action="/hotel/filter">
    @csrf
<label >Filter hotel : </label>
<select name="bintang">
    @foreach(DB::table('hotel')->select('bintang')->groupby('bintang')->get() as $bintang)
        <option value="{{$bintang->bintang}}">{{$bintang->bintang}}</option>
    @endforeach
</select>
<button name="submit">Tampilkan</button>
</form>
<br>
    <table>
        <thead>
            <tr>
                <th scope="col">tempat</th>
                <th scope="col">nama hotel</th>
                <th scope="col">bintang</th>   
            </tr>
        </thead>
        <tbody>
            @foreach($hotel as $dr)
            <tr>
                <td style= "text-align:center;">{{$dr->tempat}}</td>
                <td>{{$dr->nama hotel}}</td>
                <td>{{$dr->bintang}}</td>
            </tr>
           @endforeach
        </tbody>
    </table>
@endsection