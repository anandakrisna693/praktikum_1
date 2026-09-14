<?php

use Illuminate\Support\Facades\Route;

Route::get('/ananda', function () {
    return view('welcome');
});

Route::get('/luqmanganteng', function () {
    return view('malang');
});

Route::get('/biodata', function () {
    return view('biodata');
});

Route::get('/biodataortu', function () {
    $nama1 = 'Imam Syafii';
    $nama2 = 'Indrawati';
    $fotoa = 'images/bapak.jpeg';
    $fotob = 'images/ibu.jpeg';

    $tgl_lahir1 = 'Bojonegoro, 3 Juli 1976';
    $tgl_lahir2 = 'Bojonegoro, 22 Mei 1988';

    $usia1 = '60 tahun';
    $usia2 = '48 tahun';

    $alamat = 'Desa Sukorejo';
    $no_telp = '087849065669';

    return view('biodata.biodataortu', [
        'nama1' => $nama1,
        'nama2' => $nama2,
        'fotoa' => $fotoa,
        'fotob' => $fotob,
        'tgl_lahir1' => $tgl_lahir1,
        'tgl_lahir2' => $tgl_lahir2,
        'usia1' => $usia1,
        'usia2' => $usia2,
        'alamat' => $alamat,
        'no_telp' => $no_telp,
    ]);
});

Route::get('/asalsekolah', function () {
    return view('sekolah');
});

Route::get('/data', function () {
    $nama = 'Jane Doe';

    return view('biodata.data', [
        'nyamah' => $nama,
    ]);
});

Route::get('/biodata1', function () {
    $nama = 'Ananda Krisna Eggy Prayoga';
    $foto = 'images/ananda.jpeg';
    $tgl_lahir = 'Bojonegoro, 30 Januari 2006';
    $NIM = '253107050009';
    $study = 'Manajemen Informatika';
    $jurusan = 'Sistem Informasi';
    $alamat = 'Desa Sukorejo';
    $no_telp = '087849065669';

    return view('biodata.biodata', [
        'nama' => $nama,
        'foto' => $foto,
        'tgl_lahir' => $tgl_lahir,
        'NIM' => $NIM,
        'study' => $study,
        'jurusan' => $jurusan,
        'alamat' => $alamat,
        'no_telp' => $no_telp,
    ]);
});
