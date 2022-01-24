<?php

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
