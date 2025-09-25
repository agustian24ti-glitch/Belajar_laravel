<?php

use Illuminate\Support\Facades\Route;

Route::get('/pcr', function(){
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function(){
    return 'Hallo Mahasiswa';
});
