@extends('template')
@section('tulisan1', 'Page Counter')
@section('konten')
    <div class="container">
        <div class="alert alert-success">
            Anda pengunjung ke:
            @foreach($pagecounter as $p)
                {{ $p->Jumlah }}
            @endforeach
          </div>
</div>
@endsection