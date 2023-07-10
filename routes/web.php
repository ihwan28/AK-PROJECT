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
    return view('layouts.beranda',[
        "title" => "Beranda"
    ]);
});

Route::get('/talentHunter', function () {
    return view('layouts.talentHunter',[
        "title" => "Talent Hunter"
    ]);
});

Route::get('/tipsKerja', function () {
    return view('layouts.tipsKerja',[
        "title" => "Tips Kerja"
    ]);
});

Route::get('/daftarKandidat', function () {
    return view('layouts.daftarKandidat',[
        "title" => "Daftar Kandidat"
    ]);
});

Route::get('/pasangLowongan', function () {
    return view('layouts.pasangLowongan',[
        "title" => "Pasang Lowongan"
    ]);
});