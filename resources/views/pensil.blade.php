@extends('template')

@section('tulisan1', 'Data pensil')

@section('link1')
	<a href="/pensil/tambah" class="btn btn-primary"> + Tambah Merk Baru</a>
@endsection
@section('konten')

	<br/>
	<form action="/pensil/cari" method="GET">
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Cari Merk Pensil :</label>
            <div class="col-sm-6">
              <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari pensil .." value="{{ old('cari') }}">
        	</div>
            <div class="col-sm-4">
                <input type="submit" value="CARI" class="btn btn-success">
              </div>
		</div>
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>MerkPensil</th>
			<th>Stock</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($pensil as $p)
		<tr>
			<td>{{ $p->MerkPensil }}</td>
			<td>{{ $p->Stock }}</td>
			<td>{{ $p->Tersedia }}</td>
			<td>
				<a href="/pensil/edit/{{ $p->KodePensil }}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
				|
				<a href="/pensil/hapus/{{ $p->KodePensil }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
			</td>
		</tr>
		@endforeach
	</table>

    <br/>
	Halaman : {{ $pensil->currentPage() }} <br/>
	Jumlah Data : {{ $pensil->total() }} <br/>
	Data Per Halaman : {{ $pensil->perPage() }} <br/>


	{{ $pensil->links() }}


@endsection