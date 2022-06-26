<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontController::class, 'index']);
Route::get('/materi/{kode_pelajaran}', [FrontController::class, 'materi']);
Route::get('/tugas/{kode_pelajaran}', [FrontController::class, 'tugas']);
Route::post('/dropzone-store', [FrontController::class, 'dropzoneStore'])->name('dropzone.store');
Route::post('/jawaban-store', [FrontController::class, 'jawabanStore'])->name('jawaban.store');
