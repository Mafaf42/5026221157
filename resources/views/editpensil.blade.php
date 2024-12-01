@extends('template')

@section('tulisan1','Edit pensil')

@section('link1')
    <a href="/pensil"> Kembali</a>
@endsection

@section('konten')
@foreach($pensil as $p)
<form action="/pensil/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $p->KodePensil }}">

    <div class="row mb-3">
        <label for="MerkPensil" class="col-sm-2 col-form-label">Merk Pensil</label>
        <div class="col-sm-10">
            <input type="text" name="MerkPensil" class="form-control" id="MerkPensil" required value="{{ $p->MerkPensil }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="Stock" class="col-sm-2 col-form-label">Stock</label>
        <div class="col-sm-10">
            <input type="number" name="Stock" class="form-control" id="Stock" required value="{{ $p->Stock }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="Tersedia" class="col-sm-2 col-form-label">Tersedia</label>
        <div class="col-sm-10">
        <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="Tersedia" name="Tersedia" 
                    value="y" {{ $p->Tersedia == 'y' ? 'checked' : '' }}>
                <label class="form-check-label" for="Tersedia">Tersedia</label>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12">
            <center><input type="submit" value="Simpan Data" class="btn btn-primary"></center>
        </div>
    </div>
</form>
@endforeach
@endsection('konten')