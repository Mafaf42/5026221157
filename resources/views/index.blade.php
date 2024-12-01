@extends('template')

@section('tulisan1', 'Data Pegawai')

@section('link1')
	<a href="/pegawai/tambah" class='btn btn-primary'> + Tambah Pegawai Baru</a>
@endsection

@section('konten')
	<br/>
	<p>Cari Nama Pegawai :</p>
	<form action="/pegawai/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<button type="submit" class="btn btn-success">
        <i class="fa-solid fa-magnifying-glass"></i>
    </button>
	</form>
	<br/>
        <table class='table table-striped table-hover'>
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
            @foreach($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class='btn btn-info btn-sm'><i class="fa-solid fa-pen-to-square"></i></a>
                    |
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class='btn btn-danger btn-sm'><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </table>
	<br/>
	Halaman : {{ $pegawai->currentPage() }} <br/>
	Jumlah Data : {{ $pegawai->total() }} <br/>
	Data Per Halaman : {{ $pegawai->perPage() }} <br/>
 
 
	{{ $pegawai->links() }}
@endsection 