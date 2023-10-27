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
use App\Models\DataOfViolation;
use App\Models\Santri;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        $data['jumlahSanti'] = Santri::all()->count();
        $data['jumlahPelanggaran'] = DataOfViolation::all()->count();
        $data['jumlahPetugas'] = User::where('role', 'petugas')->count();
        $data['jumlahAdmin'] = User::where('role', 'admin')->count();
        $data['jumlahWali'] = User::where('role', 'wali')->count();
        // return $data;
        return view('dashboard', $data);
    })->name('dashboard');



    //dashboard wali
    Route::get('/dashboard-wali', function () {
        $wali = User::with([
            'santri',
        ])->where('id', Auth::user()->id)->get();
        // return $wali;
        return view('dashboard-wali', compact('wali'));
    })->name('dashboard.wali');

    // show wali
    Route::get('/dashboard-wali/{id}', function ($id) {
        $santri = Santri::with([
            'dataOfViolations',
            'wali'
        ])->where('id', $id)->find($id);
        // return $wali;
        return view('dashboard-detail-wali', compact('santri'));
    })->name('dashboard.wali.show');

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
    // Route::get('/wali', [WaliController::class, 'index'])->name('wali.index');
    Route::resource('wali', WaliController::class);
    //santri
    Route::resource('santri', SantriController::class);
    //profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    //auth login
});


Route::get('/login', [AuthController::class, 'formLogin'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');
//logout
Route::post("/logout", function () {
    Auth::logout();
    return redirect()->route("login");
})->name("logout");
