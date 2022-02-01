<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\feedbackController;
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
    return view('home');
});
Route::get('/hitungKata', function () {
    return view('hitungKata/index');
});
Route::get('/feedback', [FeedbackController::class, 'index']);
Route::post('/feedback/store', [FeedbackController::class, 'store']);

Route::get('/admin/feedbacks', [AdminController::class, 'feedbacks'])->middleware('auth');
Route::get('/admin/login', [AdminController::class, 'loginAdmin'])->name('login')->middleware('guest');
Route::post('/admin/login', [AdminController::class, 'authenticate']);
Route::post('/admin/logout', [AdminController::class, 'logout']);


Route::middleware('auth')->group(function () {
    /* admin prefix, ex : admin/users , admin/news */
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::redirect('/', 'admin/home', 301);

        Route::get('feedbacks', [AdminController::class, 'feedbacks']);
        Route::get('home', [AdminController::class, 'index']);
    });
});
