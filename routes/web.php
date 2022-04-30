<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class , 'index']);
Route::get('/register', [MainController::class , 'register']);
Route::post('/uploadbook', [MainController::class , 'uploadbook']);
Route::get('/redirects', [MainController::class , 'redirects']);
Route::get('/deletebook/{id}', [MainController::class , 'deletebook']);
Route::get('/deletpostes/{id}', [MainController::class , 'deletepostes']);
Route::post('/uploadpostes', [MainController::class , 'uploadpostes']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
