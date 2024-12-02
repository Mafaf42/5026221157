<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome2');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/blog', function () {
    $nama = 'John Doe';
    $alamat = 'Jl. Mawar No. 123';
    $umur = 25;

    return view('blog', compact('nama', 'alamat', 'umur'));
    
});

Route::get('/pertemuan1', function () {
    return view('halo');
});

Route::get('/pertemuan2', function () {
    return view('Style2');
});

Route::get('/pertemuan3', function () {
    return view('responsive1');
});

Route::get('/pertemuan4', function () {
    return view('form');
});

Route::get('/pertemuan5', function () {
    return view('Tugas1');
});

Route::get('/pertemuan6', function () {
    return view('5026221157');
});

Route::get('/pertemuan7', function () {
    return view('welcome2');
});

Route::get('/pertemuan8', function () {
    return view('welcome2');
});

use App\Http\Controllers\PegawaiDBController;
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari',[PegawaiDBController::class, 'cari']);


use App\Http\Controllers\PensilDBController;

Route::get('/pensil', [PensilDBController::class, 'pensil']);
Route::get('/pensil/tambah', [PensilDBController::class, 'tambah']);
Route::post('/pensil/store', [PensilDBController::class, 'store']);
Route::get('/pensil/edit/{id}', [PensilDBController::class, 'edit']);
Route::post('/pensil/update', [PensilDBController::class, 'update']);
Route::get('/pensil/hapus/{id}', [PensilDBController::class, 'hapus']);
Route::get('/pensil/cari', [PensilDBController::class, 'cari']);

use App\Http\Controllers\PageCounterController;

Route::get('/PageCounter', [PageCounterController::class, 'index']);



