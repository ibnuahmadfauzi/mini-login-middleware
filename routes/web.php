<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [MahasiswaController::class, 'login']);
Route::post('/login', [MahasiswaController::class, 'prosesLogin']);

Route::get('/logout', [MahasiswaController::class, 'logout']);

Route::redirect('/', '/login');

Route::get('/daftar-mahasiswa', [MahasiswaController::class, 'daftarMahasiswa'])->middleware('login');

Route::get('/tabel-mahasiswa', [MahasiswaController::class, 'tableMahasiswa'])->middleware('login');

Route::get('/blog-mahasiswa', [MahasiswaController::class, 'blogMahasiswa'])->middleware('login');
