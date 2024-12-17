<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanDBController extends Controller
{
    public function karyawan()
    {
        $karyawan = DB::table('karyawan')->get();
        return view('karyawan', ['karyawan' => $karyawan]);
    }

    public function tambah()
    {
        return view('tambahkaryawan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namalengkap' => 'required|string|max:255',
            'divisi' => 'required|string|max:255',
            'departemen' => 'required|string|max:255',
        ]);

        DB::table('karyawan')->insert([
            'namalengkap' => strtoupper($request->namalengkap),
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        return redirect('/karyawan')->with('success', 'Data karyawan berhasil ditambahkan!');
    }

    public function hapus($id)
    {
        DB::table('karyawan')->where('kodepegawai', $id)->delete();
        return redirect('/karyawan')->with('success', 'Data karyawan berhasil dihapus!');
    }
}
