<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('app.dashboards.student-dashboard');
});
Route::get('/test2', function () {
    return view('app.admin.student.list');
});
Route::get('/test3', function () {
    return view('app.admin.student.view');
});
Route::get('/testSubmit', function (Request $request) {
    return $request;
})->name('testSubmit');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
