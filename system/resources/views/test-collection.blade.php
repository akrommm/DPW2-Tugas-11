<table>
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Berat</th>
    </thead>
    <tbody>
        @foreach($list as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->harga}}</td>
            <td>{{$item->berat}}</td>
        </tr>
        @endforeach
    </tbody>
</table>