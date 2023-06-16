<?php

use App\Http\Controllers\MessageFormController;
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

Route::get('/MessageBord/add', [MessageFormController::class, 'add']);
Route::post('/MessageBord/add', [MessageFormController::class, 'add']);
Route::post('/MessageBord/confirm', [MessageFormController::class, 'confirm']);
Route::get('/MessageBord/complete', function () {
    return view('MessageBord.complete');
});
Route::get('/MessageBord/index', [MessageFormController::class, 'index']);
Route::post('/MessageBord/delete/{id}', [MessageFormController::class, 'delete']);
Route::get('/MessageBord/edit/{id}', [MessageFormController::class, 'edit']);
Route::post('/MessageBord/edit/{id}', [MessageFormController::class, 'update']);
Route::post('/MessageBord/index', [MessageFormController::class, 'index']);
