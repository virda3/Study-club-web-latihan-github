<h2>Daftar Kategori</h2>

<table border="1" cellspacing="0" width="100%">

<tr>
    <th>ID</th>
    <th>Nama Kategori</th>
    <th>Keterangan</th>
    <th>Detail</th>
    <th>Delete</th>
</tr>

@foreach($kategori as $data)
<tr>
    <td>{{$data->id}}</td>
    <td>{{$data->nama_kategori}}</td>
    <td>{{$data->deskripsi}}</td>
    <td>
    
    <form action="{{ route ('kategori.destroy', $data->id)}}" method="post">
        @csrf @method('detail')
        <button type="submit"> DETAILS</button>        
       </form>
       <td>
    <form action="{{ route ('kategori.destroy', $data->id)}}" method="post">
        @csrf @method('delete')
        <button type="submit"> HAPUS</button>        
       </form>
       </td>
    </td>
</tr>
@endforeach
</table>