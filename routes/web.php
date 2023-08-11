<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DataOfViolationController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SanctionController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViolationController;
use App\Http\Controllers\WaliController;
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
//dashboard
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

//dashboard wali
Route::get('/dashboard-wali', function () {
    return view('dashboard-wali');
})->name('dashboard.wali');

// violations = pelanggaran
Route::resource('violations', ViolationController::class);
//dataofviolations = data pelanggaran
Route::resource('data-of-violations', DataOfViolationController::class);
//print = cetak
Route::get('/prints', [PrintController::class, 'index'])->name('prints.index');
// sanctions = sanksi
Route::resource('sanctions', SanctionController::class);
// users = admin,petugas
Route::resource('users', UserController::class);
// wali
Route::get('/wali', [WaliController::class, 'index'])->name('wali.index');
Route::resource('wali', WaliController::class);
//santri
Route::resource('santri', SantriController::class);
//profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
//auth login
Route::get('/login', [AuthController::class, 'formLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
