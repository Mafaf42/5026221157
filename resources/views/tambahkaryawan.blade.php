@extends('template')

@section('link1')
@endsection

    @section('konten')
	<form action="/karyawan/store" method="post">
		{{ csrf_field() }}
          <div class="row mb-3">
            <label for="namalengkap" class="col-sm-2 col-form-label">namalengkap</label>
            <div class="col-sm-10">
              <input type="text" name="namalengkap" class="form-control" id="namalengkap" required="required">
            </div>
          </div>
          <div class="row mb-3">
            <label for="divisi" class="col-sm-2 col-form-label">divisi</label>
            <div class="col-sm-10">
              <input type="text" name="divisi" class="form-control" id="divisi" required="required">
            </div>
          </div>

          <div class="row mb-3">
            <label for="departemen" class="col-sm-2 col-form-label">departemen</label>
            <div class="col-sm-10">
              <input type="text" name="departemen" class="form-control" id="departemen" required="required">
            </div>
          </div>
          
          <div class="row mb-3">
            <div class="col-sm-12">
                <center><input type="submit" value="SIMPAN" class="btn btn-primary"></center>
            </div>
          </div>
	</form>
    @endsection