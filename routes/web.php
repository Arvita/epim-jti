<?php

use App\Http\Controllers\User\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

$isCountdownActive = false;

if ($isCountdownActive) {
    Route::get('/', function () {
        return view('landing_page.countdown');
    })->name("home.countdown");
} else {
    // Just Testing Templating
    Route::get('/test', function () {
        return view('admin.pages.expo.list_peserta');
    });



    Route::get('/', function () {
        return view('landing_page.index');
    });

    // Route::get('/admin', function () {
    //     return view('admin.dashboard');
    // });

    Route::fallback(function() {
        return abort(404);
    });

    Auth::routes();

    Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);



    // ROUTE ADMIN
    Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {

        //Dashboard
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('home');
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');


        //LombaIT
        Route::get('/lomba-it', [App\Http\Controllers\Admin\LombaItController::class, 'index'])->name('admin.lomba_it');
        Route::post('/lomba-it/update', [App\Http\Controllers\Admin\LombaItController::class, 'updateEvent'])->name('admin.lomba_it.update');
        Route::post('/lomba-it/detail', [App\Http\Controllers\Admin\LombaItController::class, 'show'])->name('admin.lomba_it.detail');
        Route::post('/lomba-it/delete', [App\Http\Controllers\Admin\LombaItController::class, 'destroy'])->name('admin.lomba_it.destroy');


        //LombaIT
        Route::get('/bisnis-tik', [App\Http\Controllers\Admin\LombaTcpController::class, 'index'])->name('admin.tcp_it');
        Route::post('/bisnis-tik/update', [App\Http\Controllers\Admin\LombaTcpController::class, 'updateEvent'])->name('admin.tcp_it.update');
        Route::post('/bisnis-tik/detail', [App\Http\Controllers\Admin\LombaTcpController::class, 'show'])->name('admin.tcp_it.detail');
        Route::post('/bisnis-tik/delete', [App\Http\Controllers\Admin\LombaTcpController::class, 'destroy'])->name('admin.tcp_it.destroy');


        // ExpoIt
        Route::get('/expo-it', [App\Http\Controllers\Admin\ExpoController::class, 'index'])->name('admin.expo_it');
        Route::post('/expo-it/update', [App\Http\Controllers\Admin\ExpoController::class, 'updateEvent'])->name('admin.expo_it.update');
        Route::post('/expo-it/detail', [App\Http\Controllers\Admin\ExpoController::class, 'show'])->name('admin.expo_it.detail');
        Route::post('/expo-it/delete', [App\Http\Controllers\Admin\ExpoController::class, 'destroy'])->name('admin.expo_it.destroy');

        //USER SETTING
        Route::post('/user/data', [App\Http\Controllers\Admin\UserController::class, 'data']);
        Route::get('/user/{data}/conf', [App\Http\Controllers\Admin\UserController::class, 'confirm']);
        Route::resource('user', '\App\Http\Controllers\Admin\UserController');
    });



    // ROUTE USER
    Route::group(['prefix' => 'peserta', 'middleware' => ['auth']], function () {
        Route::get('/', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('user.dashboard');
        Route::post('/registrasi/lomba', [App\Http\Controllers\User\DashboardController::class, 'registrasi_lomba'])->name('user.registrasi.lomba');


        //Expo IT
        Route::get('/profile', [DashboardController::class, 'profileProduk'])->name('user.profile');


        // TCP IT
        Route::get('/proposal', [DashboardController::class, 'list_proposal'])->name('user.proposal.list');
        Route::post('/proposal', [DashboardController::class, 'tambah_proposal'])->name('user.proposal.tambah');
        Route::post('/dropzone/store', [DashboardController::class, 'dropzoneStore'])->name('dropzone.store');
        // Route::post('/registrasi/bisnis-tik', [App\Http\Controllers\User\DashboardController::class, 'registrasi_bisnis'])->name('user.registrasi.bisnis');


        Route::get('/cek-status', [DashboardController::class, 'checkStatus'])->name('user.check_status');
    });


    // Route::get('/admin', [App\Http\Controllers\DashboardController::class, 'index']);






    /*
    Landing Page Route
*/





    Route::get('/', function () {
        return view('landing_page.index');
    })->name("home");

    Route::get('/expo-it', function () {
        return view('landing_page.pages.expo_it');
    })->name('expo');

    Route::get('/lomba-it', function () {
        return view('landing_page.pages.lomba_jaringan');
    })->name('lomba_it');

    Route::get('/lomba-bisnis-tik', function () {
        return view('landing_page.pages.lomba_bisnis');
    })->name('tcp_it');
}
