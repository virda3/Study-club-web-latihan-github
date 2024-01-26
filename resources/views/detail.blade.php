<h2>Detail Kategori</h2>

    <p><b>Nama Kategori</b>: {{$kategori->nama_kategori}}</p>
    <p><b>Deskripsi</b>: {{$kategori->deskripsi}}</p>
<a href action="{{route('kategori.index')}}">Kembali ke index </a>
<a href action="{{route('kategori.edit', $kategori->id)}}">Edit kategori </a>