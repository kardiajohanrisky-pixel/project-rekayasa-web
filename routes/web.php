<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    $data = [
        'nama' => 'Risky Kardia Johan',
        'nim' => '251011700863',
        'prodi' => 'Sistem Informasi',
        'kampus' => 'Universitas Pamulang',
        'foto' => 'foto.png'
    ];
    return view('profile', $data);
});

Route::get('/about', function () {
    return view('about');
});