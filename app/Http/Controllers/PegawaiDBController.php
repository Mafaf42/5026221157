<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiDBController extends Controller
{
    public function index(){
    // mengambil data dari tabel pegawai dengan pagination
    $pegawai = DB::table('pegawai')->paginate(10); // Menampilkan 10 data per halaman

    // mengirim data pegawai ke view index
    return view('index', ['pegawai' => $pegawai]);
	}

    public function tambah()
{
 
	// memanggil view tambah
	return view('tambah');
 
}
public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'jabatan' => 'required|string|max:100',
        'umur' => 'required|integer|min:18|max:65',
        'alamat' => 'required|string|max:500',
    ]);

    DB::table('pegawai')->insert([
        'pegawai_nama' => $request->nama,
        'pegawai_jabatan' => $request->jabatan,
        'pegawai_umur' => $request->umur,
        'pegawai_alamat' => $request->alamat,
    ]);

    return redirect('/pegawai')->with('success', 'Data pegawai berhasil ditambahkan.');
}


public function edit($id)
{
    // mengambil data pegawai berdasarkan id
    $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->first(); // Mengambil satu data

    // passing data pegawai ke view edit.blade.php
    return view('edit', ['pegawai' => $pegawai]);
}

public function update(Request $request)
{
	// update data pegawai
	DB::table('pegawai')->where('pegawai_id',$request->id)->update([
		'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_umur' => $request->umur,
		'pegawai_alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
}
public function hapus($id)
{
    DB::table('pegawai')->where('pegawai_id', $id)->delete();

    return redirect('/pegawai')->with('success', 'Data pegawai berhasil dihapus.');
}

public function cari(Request $request)
{
    $cari = $request->cari;

    // mengambil data sesuai pencarian dengan pagination
    $pegawai = DB::table('pegawai')
        ->where('pegawai_nama', 'like', "%" . $cari . "%")
        ->paginate(10);

		$pegawai->appends(['cari' => $cari]);

    return view('index', ['pegawai' => $pegawai]);
}

}
