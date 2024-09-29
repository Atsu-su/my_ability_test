<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
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

Route::get('/', function() {
    return view('contact_form');
});

Route::get('/confirm', function() {
    return view('confirm');
});

Route::get('/thanks', function() {
    return view('thanks');
});

Route::get('/admin', function() {
    return view('admin');
});

// 認証機能を追加
Route::middleware('auth')->group(function() {
    Route::get('/admin', [AuthController::class, 'index']);
});
