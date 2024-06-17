<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// display form
Route::get('/usaw', function () {
    return view('form');
});

// submission and result
Route::post('/usaw', function (\Illuminate\Http\Request $request) {
    $data = $request->all();
    return view('result', ['data' => $data]);
})->name('submit-form');
