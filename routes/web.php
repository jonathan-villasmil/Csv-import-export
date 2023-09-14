<?php

use App\Http\Controllers\CsvController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Routes CSV
Route::get('/',[CsvController::class, 'index'])->name('index');
// Route::get('/import',[CsvController::class, 'create'])->name('import.create');
Route::post('/import',[CsvController::class, 'import'])->name('import.store');
Route::get('/export',[CsvController::class, 'export'])->name('export');