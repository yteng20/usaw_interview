<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usaw', function () {
    return view('form');
});

Route::post('/usaw', function (\Illuminate\Http\Request $request) {
    $data = $request->all();
    return view('result', ['data' => $data]);
})->name('submit-form');
