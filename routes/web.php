<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/landingPage', function () {
    return view('landingPage');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/petisi', function () {
    return view('petisi');
});

Route::get('/detail-petisi', function () {
    return view('detail-petisi');
});

Route::get('/petisi-anda', function () {
    return view('petisi-anda');
});

Route::get('/tanda-tangan-petisi', function () {
    return view('tanda-tangan-petisi');
});

Route::get('/data-pendukung', function () {
    return view('data-pendukung');
});

Route::get('/forum', function () {
    return view('forum');
});

Route::get('/konsultasi', function () {
    return view('konsultasi');
});

Route::get('/setting', function () {
    return view('setting');
});
