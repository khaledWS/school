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

Route::prefix('/students')->group(function (){
Route::get('/', [StudentController::class,'index'])->name('list-students');
Route::post('/create-student',[StudentController::class,'store'])->name('create-student');
Route::get('/delete-student', function (){
    return 'DELETE';
})->name('delete-student');
Route::get('/download/{filename}', function (Request $request,$filename){
    $x = explode('.', $filename);
    $extension = end($x);
   return Storage::disk('student-files')->download($filename,$request->name.'.'.$extension) ;
})->name('download');

Route::get('/{student}',[StudentController::class,'show'])->name('view-student');

Route::post('/update-student/{student}',[StudentController::class,'update'])->name('update-student');

Route::post('/{student}/update-notes', [StudentController::class, 'updateNotes']);
Route::post('/{student}/update-files', [StudentController::class, 'updateFiles']);



});


// Route::get('create', [StudentController::class,'create']);





Route::get('/test', function () {
    return view('app.dashboards.student-dashboard');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
