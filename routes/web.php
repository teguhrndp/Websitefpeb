<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/sejarah', function () {
    return view('tentang/sejarah');
});
Route::get('/profil', function () {
    return view('tentang/profil');
});
Route::get('/visimisi', function () {
    return view('tentang/visimisi');
});
Route::get('/strukturorganisasi', function () {
    return view('tentang/strukturorganisasi');
});
Route::get('/ruangkelas', function () {
    return view('fasilitas/ruangkelas');
});
Route::get('/labkom', function () {
    return view('fasilitas/labkom');
});
Route::get('/microteaching', function () {
    return view('fasilitas/microteaching');
});
Route::get('/spacex', function () {
    return view('fasilitas/spacex');
});
Route::get('/smartclassroom', function () {
    return view('fasilitas/smartclassroom');
});
Route::get('/akuntansi', function () {
    return view('prodi/akuntansi');
});
Route::get('/ieki', function () {
    return view('prodi/ieki');
});
Route::get('/manajemen', function () {
    return view('prodi/manajemen');
});
Route::get('/pendidikanakuntansi', function () {
    return view('prodi/pendidikanakuntansi');
});
Route::get('/pendidikanbisnis', function () {
    return view('prodi/pendidikanbisnis');
});
Route::get('/pendidikanekonomi', function () {
    return view('prodi/pendidikanekonomi');
});
Route::get('/pendidikanmanajemenperkantoran', function () {
    return view('prodi/pendidikanmanajemenperkantoran');
});
Route::get('/akreditasi', function () {
    return view('akademik/akreditasi');
});
Route::get('/kurikulum', function () {
    return view('akademik/kurikulum');
});
Route::get('/fasilitas', function () {
    return view('fasilitas/fasilitas');
});
Route::get('/pimpinan', function () {
    return view('tenagapendidik/pimpinan');
});
Route::get('/dosen', function () {
    return view('tenagapendidik/dosen');
});
Route::get('/tendik', function () {
    return view('tenagapendidik/tendik');
});
Route::get('/organisasikemahasiswaan', function () {
    return view('kemahasiswaan/organisasimahasiswa');
});
Route::get('/informasiwajibberkala', function () {
    return view('ppid/informasiwajibberkala');
});
Route::get('/informasiwajibsedia', function () {
    return view('ppid/informasiwajibsedia');
});
Route::get('/permohonaninformasipublik', function () {
    return view('ppid/permohonaninformasipublik');
});
Route::get('/zonaintegritas', function () {
    return view('zi/zonaintegritas');
});
Route::get('/zianggota', function () {
    return view('zi/zianggota');
});
Route::get('/evidance', function () {
    return view('zi/evidance');
});
Route::get('/area', function () {
    return view('zi/area');
});


//Pelayanan Publik
Route::get('/maklumat', function () {
    return view('layananpublik/maklumatpelayanan');
});
Route::get('/jamkerja', function () {
    return view('layananpublik/jamkerja');
});
Route::get('/pelayananakademik', function () {
    return view('layananpublik/pelayananakademik');
});

//TENTANG
Route::get('/visimisi', 'App\Http\Controllers\ProfilController@showVisiMisi')->name('visimisi');
Route::get('/sejarah', 'App\Http\Controllers\ProfilController@showSejarah')->name('sejarah');