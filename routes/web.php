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
    return view('biodataortu');
});
Route::get('/asalsekolah', function () {
    return view('sekolah');
});
