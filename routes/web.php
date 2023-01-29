<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'index'])->name('users.index'); //view
Route::post('import', [UserController::class, 'import'])->name('users.import'); //import route
Route::get('export-csv', [UserController::class, 'exportCsv'])->name('users.export-csv');
Route::get('export-pdf', [UserController::class, 'exportPdf'])->name('users.export-pdf');
