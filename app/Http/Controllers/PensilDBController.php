<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PensilDBController extends Controller
{
    public function pensil(){
        // mengambil data dari tabel pegawai dengan pagination
        $pensil = DB::table('pensil')->paginate(10); // Menampilkan 10 data per halaman

        // mengirim data pegawai ke view index
    return view('pensil', ['pensil' => $pensil]);
	}

    public function tambah()
    {
 
	// memanggil view tambah
	return view('tambahpensil');
 
    }
public function store(Request $request)
{
    $Stock = $request -> Stock;
    $Tersedia = $Stock > 0 ? 'y' : 'n';

    DB::table('pensil')->insert([
        'MerkPensil' => $request->MerkPensil,
        'Stock' => $Stock,
        'Tersedia' => $Tersedia
    ]);

    return redirect('/pensil')->with('success', 'Data pensil berhasil ditambahkan.');
}


public function edit($id)
{
    // mengambil data pegawai berdasarkan id
    $pensil = DB::table('pensil')->where('KodePensil', $id)->get(); // Mengambil satu data

    // passing data pegawai ke view edit.blade.php
    return view('editpensil', ['pensil' => $pensil]);
}

public function update(Request $request)
{
    $validatedData = $request->validate([
        'MerkPensil' => 'required|string|max:255',
        'Stock' => 'required|integer|min:0',
        'Tersedia' => 'nullable|string|in:y,n',
    ]);

    $Tersedia = $validatedData['Stock'] > 0 ? ($request->Tersedia ?? 'n') : 'n';

    DB::table('pensil')->where('KodePensil', $request->id)->update([
        'MerkPensil' => $validatedData['MerkPensil'],
        'Stock' => $validatedData['Stock'],
        'Tersedia' => $Tersedia,
    ]);

    return redirect('/pensil')->with('success', 'Data berhasil diperbarui.');
}

public function hapus($id)
{
    DB::table('pensil')->where('KodePensil', $id)->delete();

    return redirect('/pensil')->with('success', 'Data pensil berhasil dihapus.');
}

public function cari(Request $request)
{
    $cari = $request->cari;

    // mengambil data sesuai pencarian dengan pagination
    $pensil = DB::table('pensil')
        ->where('MerkPensil', 'like', "%" . $cari . "%")
        ->paginate(10);

		$pensil->appends(['cari' => $cari]);

    return view('pensil', ['pensil' => $pensil]);
}

}
