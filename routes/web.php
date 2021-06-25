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

if($isCountdownActive){
    Route::get('/', function () {
        return view('landing_page.countdown');
    })->name("home.countdown");
}else{
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



Auth::routes();

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);



// ROUTE ADMIN
Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function () {
    //Dashboard

    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('home');
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dasboard');

});



// ROUTE USER
Route::group(['prefix' => 'peserta', 'middleware' => ['auth']], function () {
    Route::get('/', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('user.dashboard');
    Route::post('/registrasi/lomba', [App\Http\Controllers\User\DashboardController::class, 'registrasi_lomba'])->name('user.registrasi.lomba');



    // TCP IT
    Route::get('/proposal', [DashboardController::class, 'list_proposal'])->name('user.proposal.list');
    Route::post('/proposal', [DashboardController::class, 'register_tcp_it'])->name('user.proposal.tambah');
    Route::post('dropzone/store', [DashboardController::class, 'dropzoneStore'])->name('dropzone.store');
    // Route::post('/registrasi/bisnis-tik', [App\Http\Controllers\User\DashboardController::class, 'registrasi_bisnis'])->name('user.registrasi.bisnis');
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
