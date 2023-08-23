<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatihanproyekController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RekapController;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegisterController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('main', function () {
    return view('layouts.main');
});

Route::get('home', function () {
    return view('layouts.home');
});

Route::get('layouts', function () {
    return view('layouts.home');
});

Route::get('nilai', function () {
    return view('nilai.index');
});

Route::get('datanilai', function () {
    return view('nilai.index2')->middleware('auth', 'siswa');
});

Route::get('datasiswa', function () {
    return view('siswa.index2');
});

Route::get('dataSertifikat', function () {
    return view('sertifikat.index2');
});

Route::get('rekap', function () {
    return view('rekap.index');
});

//route simpan DAFTAR
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/tambahsiswa', [SiswaController::class, 'create'])->name('siswa.create');
Route::get('siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('siswa', [SiswaController::class, 'index'])->name('siswa.index2');
Route::get('layouts', [HomeController::class, 'home']);
Route::get('datanilai', [NilaiController::class, 'index2']);
Route::get('datasiswa', [SiswaController::class, 'index2']);
Route::get('datasertifikat', [SertifikatController::class, 'index'])->name('sertifikat.index');
Route::get('datasertifikat', [SertifikatController::class, 'index2'])->name('sertifikat.index2');
Route::get('rekap', [RekapController::class, 'create'])->name('rekap.index');
//routing view barang
Route::get('datanilai', [NilaiController::class, 'index2'])->name('nilai.index2');
Route::get('datasiswa', [SiswaController::class, 'index2'])->name('siswa.index2');
Route::get('/tambahnilai', [NilaiController::class, 'create'])->name('nilai.create');
//routing view barang
Route::get('nilai', [NilaiController::class, 'index'])->name('nilai.index');
//route simpan nilai
Route::post('/nilai', [NilaiController::class, 'store'])->name('nilai.store');
//route edit nilai
Route::get('/nilai/edit{kode_nilai}', [NilaiController::class, 'edit'])->name('nilai.edit');
//route edit nilai
Route::post('/nilai/edit{kode_nilai}', [NilaiController::class, 'update'])->name('nilai.update');
//route delete nilai
Route::post('/nilai/delete{kode_nilai}', [NilaiController::class, 'destroy'])->name('nilai.destroy');





Route::get('absensi', function () {
    return view('absensi.index2');
});
Route::get('absensi', function () {
    return view('absensi.index');
});

Route::get('home', function () {
    return view('home.index');
});
Route::get('home', function () {
    return view('home.index2');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('pengajar', function () {
    return view('pengajar.index');
});

Route::get('siswa', function () {
    return view('siswa.index');
});
Route::get('siswa', function () {
    return view('siswa.index2');
});

Route::get('sertifikat', function () {
    return view('sertifikat.index');
});
Route::get('sertifikat', function () {
    return view('sertifikat.index2');
});

Route::get('exportExcelNilai', [NilaiController::class, 'exportExcelNilai'])->name('excel');


Route::get('cetakPDFNilai', [NilaiController::class, 'pdfNilai'])->name('pdfNilai');

Route::get('cetakPDFSiswa', [SiswaController::class, 'pdfSiswa'])->name('pdfSiswa');






Route::get('absensi', function () {
    return view('absensi.index');
});

Route::get('absensi', [AbsensiController::class, 'index']);

Route::get('/tambahabsensi', [AbsensiController::class, 'create'])->name('absensi.create')->middleware('auth', 'siswa');
//routing view barang
Route::get('absensi', [AbsensiController::class, 'index'])->name('absensi.index');
//route simpan nilai
Route::post('/absensi', [AbsensiController::class, 'store'])->name('absensi.store');
//route edit nilai
Route::get('/absensi/edit{id}', [AbsensiController::class, 'edit'])->name('absensi.edit');
//route edit nilai
Route::post('/absensi/edit{id}', [AbsensiController::class, 'update'])->name('absensi.update');
//route delete nilai
Route::post('/absensi/delete{id}', [AbsensiController::class, 'destroy'])->name('absensi.destroy');




Route::get('cetakPDFAbsensi', [AbsensiController::class,  'pdfAbsensi'])->name('pdfAbsensi');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('guru',[GuruController::class, 'index']);
Route::get('logoutku', 'LoginController@logoutku')->name('logoutku')->middleware('auth');
Route::get('logoutku', [LoginController::class, 'logoutku']);
Route::get('logout', [App\Http\Controllers\LoginController::class, 'logoutku'])->name('logoutku');

//route tambah sertifikat
//routing view barang
Route::get('sertifikat', [SertifikatController::class, 'index'])->name('sertifikat.index');
Route::get('/tambahsertifikat', [SertifikatController::class, 'create'])->name('sertifikat.create')->middleware('auth', 'guru');
Route::post('/sertifikat', [SertifikatController::class, 'store'])->name('sertifikat.store');

//Route edit
Route::get('/sertifikat/edit/{id_sertif}', [SertifikatController::class, 'edit'])->name('sertifikat.edit');

//Route update
Route::post('/sertifikat/edit/{id_sertif}', [SertifikatController::class, 'update'])->name('sertifikat.update');

//Route hapus
Route::post('/sertifikat/delete/{id_sertif}',  [SertifikatController::class, 'destroy'])->name('sertifikat.destroy');
// cetak sertifikat
Route::get('/sertifikat/cetak/{id_sertif}', [SertifikatController::class, 'print'])->name('sertifikat.print');

// cetak nilai
Route::get('/nilai/cetak/{kode_nilai}', [NilaiController::class, 'print'])->name('nilai.print');


//rekap
Route::get('rekap', [RekapController::class, 'index'])->name('rekap.index');
Route::get('/tambahrekap', [RekapController::class, 'create'])->name('rekap.create')->middleware('auth', 'guru');
Route::post('/rekap', [RekapController::class, 'store'])->name('rekap.store');

//Route edit
Route::get('/rekap/edit/{id_rekap}', [RekapController::class, 'edit'])->name('rekap.edit');

//Route update
Route::post('/rekap/edit/{id_rekap}', [RekapController::class, 'update'])->name('rekap.update');

//Route hapus
Route::post('/rekap/delete/{id_rekap}',  [RekapController::class, 'destroy'])->name('rekap.destroy');