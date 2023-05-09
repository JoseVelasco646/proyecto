<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcercaController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CitasController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/acerca',[AcercaController::class,'sobre_acerca']);
Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');


Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/auth/login',[MainController::class, 'login'])
        ->name('auth.login');
    Route::get('/auth/register',[MainController::class, 'register'])
        ->name('auth.register');
    Route::get('/admin/index',[ClientesController::class, 'index'])
        ->name('inicio');
    Route::resource('/admin/citas',CitasController::class);
});
