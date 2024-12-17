
@extends('template')


@section('link1')
@endsection
@section('konten')

	<table class="table table-striped table-hover">
		<tr>
			<th>kodepegawai</th>
			<th>namalengkap</th>
			<th>divisi</th>
			<th>departemen</th>
		</tr>
		@foreach($karyawan as $k)
		<tr>
			<td>{{ $k->kodepegawai}}</td>
			<td>{{ $k->namalengkap }}</td>
			<td>{{ $k->divisi }}</td>
			<td>{{ $k->departemen }}</td>
			<td>
				<a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
			</td>
		</tr>
		@endforeach
	</table>
    <br/>
	<a href="/karyawan/tambah" class="btn btn-primary"> + Tambah Data</a>

@endsection

