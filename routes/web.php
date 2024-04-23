<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list-menu/get-all-data', function () {
    $menus = [
        [
            'makanan' => 'soto mie',
            'harga' => 8000,
        ],
        [
            'makanan' => 'Bakso Malang',
            'harga' => 13000,
        ],
        [
            'makanan' => 'Ketoprak',
            'harga' => 15000,
        ],
    ];

    return response()->json([
        'info' => 'data berhasil di dapatkan',
        'data' => $menus,
    ]);
});

Route::get('/list-menu/{makanan}/{harga}', function ($makanan, $harga) {
    return "Anda memilih makanan $makanan dengan harga $harga";
});

Route::get('/list-menu', function () {
    return "Ini adalah halaman yang menampilkan semua menu yang ada di cafe amandemy";
});

