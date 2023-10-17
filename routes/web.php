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
Route::get('/tentang', function () {
    return view('zi/tentang');
});
Route::get('/zianggota', function () {
    return view('zi/zianggota');
});
Route::get('/dokumentasi', function () {
    return view('zi/evidance');
});
Route::get('/area', function () {
    return view('zi/area');
});
//Akademik
Route::get('/akreditasi', function () {
    return view('akademik/akreditasi');
});
Route::get('/kurikulum', function () {
    return view('akademik/kurikulum');
});
Route::get('/kelasinternasional', function () {
    return view('akademik/kelasinternasional');
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
Route::get('/pelayanannonakademik', function () {
    return view('layananpublik/pelayanannonakademik');
});

//TENTANG
Route::get('/visimisi', 'App\Http\Controllers\ProfilController@showVisiMisi')->name('visimisi');
Route::get('/sejarah', 'App\Http\Controllers\ProfilController@showSejarah')->name('sejarah');

//DosenProdi
Route::get('/dosens1pak', function () {
    return view('dosen/s1pak');
});
Route::get('/dosens1akuntansi', function () {
    return view('dosen/s1akuntansi');
});
Route::get('/dosens1pb', function () {
    return view('dosen/s1pb');
});
Route::get('/dosens1pe', function () {
    return view('dosen/s1pe');
});
Route::get('/dosens1ieki', function () {
    return view('dosen/s1ieki');
});
Route::get('/dosens1manajemen', function () {
    return view('dosen/s1manajemen');
});
Route::get('/dosens1manper', function () {
    return view('dosen/s1manper');
});

//Pelayanan Akademik
Route::get('/izinpenelitian', function () {
    return view('pelayananakademik/izinpenelitian');
});
Route::get('/izinmagangmandiri', function () {
    return view('pelayananakademik/izinmagangmandiri');
});
Route::get('/izinmagangkelompok', function () {
    return view('pelayananakademik/izinmagangkelompok');
});
Route::get('/izinpermintaandata', function () {
    return view('pelayananakademik/izinpermintaandata');
});
Route::get('/izinobservasimandiri', function () {
    return view('pelayananakademik/izinobservasikelompok');
});
Route::get('/izinobservasikelompok', function () {
    return view('pelayananakademik/izinobservasikelompok');
});
Route::get('/pembuatanskl', function () {
    return view('pelayananakademik/pembuatanskl');
});
Route::get('/pengaduan', function () {
    return view('pelayananakademik/pengaduan');
});

//Pelayanan Non Akademik
Route::get('/peminjamanfasilitas', function () {
    return view('pelayanannonakademik/peminjamanfasilitas');
});
Route::get('/layananpangkatjabatan', function () {
    return view('pelayanannonakademik/layananpangkatjabatan');
});