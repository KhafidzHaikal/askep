<?php

use App\Http\Controllers\AskepController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NocController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/dashboard', function(){
    return view('dashboard', [
        'title' => 'Dashboard',
    ]);
});

Route::resource('diagnosa', DiagnosaController::class);

Route::resource('askep', AskepController::class);

Route::get('/askep/{askep}', [AskepController::class, 'pdf'])->name('askep.print');

Route::get('/diagnosa-input', [DiagnosaController::class, 'input'])->name('inputDiagnosa');
Route::get('/diagnosa-input/noc', [NocController::class, 'index'])->name('noc');
Route::get('/kelompok', [KelompokController::class, 'index'])->name('index_kelompok');