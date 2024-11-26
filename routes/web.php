<?php

use Illuminate\Support\Facades\Route;

Route::get('/legal', function () {
    $filename = 'ИП Синельщиков Марк Романович.txt';
    $path = storage_path($filename);

    if (file_exists($path)) {
        return response()->file($path);
    }

    return response('Файл не найден', 404);
})->name('legal.open');

Route::get('/legal/download', function () {
    $filename = 'ИП Синельщиков Марк Романович.txt';
    $path = storage_path($filename);

    if (!file_exists($path)) {
        abort(404, 'Файл не найден');
    }

    return response()->download($path);
})->name('legal.download');

Route::get('/', function () {
    return view('pages.main');
})->name('main');
