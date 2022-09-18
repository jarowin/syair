<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SyairController;
use App\Http\Controllers\PasaranController;
use App\Http\Controllers\PrediksiController;
use App\Http\Controllers\WebController;

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

Route::get('/', [WebController::class, 'index'])->name('welcome');
Route::get('/post/detail/prediksi/{id}', [WebController::class, 'detail'])->name('post_detail');
Route::get('/post/pasaran/{nama}', [WebController::class, 'filterByPasaran'])->name('post.pasaran');

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'revalidate']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    Route::resource('/pasaran', PasaranController::class)->except('create', 'show');
    Route::resource('/syair', SyairController::class)->except('create', 'show');
    Route::resource('/prediksi', PrediksiController::class);
});
