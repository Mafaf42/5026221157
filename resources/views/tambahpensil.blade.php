@extends('template')

@section('tulisan1','Data pensil')

@section('link1')
    <a href="/pensil"> Kembali</a>
@endsection

    @section('konten')
	<form action="/pensil/store" method="post">
		{{ csrf_field() }}
          <div class="row mb-3">
            <label for="MerkPensil" class="col-sm-2 col-form-label">MerkPensil</label>
            <div class="col-sm-10">
              <input type="text" name="MerkPensil" class="form-control" id="MerkPensil" required="required">
            </div>
          </div>
          <div class="row mb-3">
            <label for="Stock" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
              <input type="text" name="Stock" class="form-control" id="Stock" required="required">
            </div>
          </div>
          
          <div class="row mb-3">
            <div class="col-sm-12">
                <center><input type="submit" value="Simpan Data" class="btn btn-primary"></center>
            </div>
          </div>
	</form>
    @endsection