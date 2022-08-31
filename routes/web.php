<?php

use App\Http\Controllers\StudentController;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//download the given filename with other parameters like diskname og name in the request
Route::get('/download/{filename}', function (Request $request, $filename) {
    downloadFile($request, $filename);
})->name('download');

//Student Routes
Route::prefix('/students')->group(function () {
    //Index
    Route::get('/', [StudentController::class, 'index'])->name('list-students');
    Route::get('/create-student', [StudentController::class, 'create'])->name('create-student');
    //Create-student
    Route::post('/create-student', [StudentController::class, 'store'])->name('create-student');
    //Delelte-student
    Route::get('/{student}/delete-student', [StudentController::class, 'destroy'])->name('delete-student');
    //View-student
    Route::get('/{student}', [StudentController::class, 'show'])->name('view-student');
    //Update-student
    Route::post('/update-student/{student}', [StudentController::class, 'update'])->name('update-student');
    //Update-Student Notes
    Route::post('/{student}/update-notes', [StudentController::class, 'updateNotes']);
    //Update-Student Files
    Route::post('/{student}/update-files', [StudentController::class, 'updateFiles']);
    Route::get('/get-files/{student}',[StudentController::class,'getFiles']);
});

Route::get('/test', function () {
    return view('app.dashboards.student-dashboard');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
