<?php

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

Route::get('/', function () {
    return view('user.pages.index');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

// ROUTE ADMIN
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    //Dashboard
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index']);

    // Auth Admin
    // Route::middleware(['admin'])->group(function () {

    // Expo
    // Route::get('kegiatan', [KegiatanController::class, 'index'])->name('list.kegiatan');
    // Route::get('kegiatan/tambah', [KegiatanController::class, 'create'])->name('tambah.kegiatan');
    // Route::get('kegiatan/edit/{id}', [KegiatanController::class, 'edit'])->name('edit.kegiatan');
    // Route::post('kegiatan/store', [KegiatanController::class, 'store'])->name('add.kegiatan');
    // Route::post('kegiatan/update/{id}', 'KegiatanController@update')->name('update.kegiatan');
    // Route::get('/kegiatan/delete/{id}', 'KegiatanController@destroy')->name('delete.kegiatan');
    // });
});

// Route::get('/admin', [App\Http\Controllers\DashboardController::class, 'index']);






/*
    Landing Page Route
*/

Route::get('/', function () {
    return view('user.pages.index');
})->name("home");

Route::get('/expo-it', function () {
    return view('user.pages.expo_it');
})->name('expo');

Route::get('/lomba-it', function () {
    return view('user.pages.lomba_jaringan');
})->name('lomba_it');

Route::get('/lomba-bisnis-tik', function () {
    return view('user.pages.lomba_bisnis');
})->name('tcp_it');
