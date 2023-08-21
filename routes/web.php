<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KangarooController;


Route::get('/', function() 
{
    return redirect()->route('login');
});

Route::group(['prefix'=> 'auth'], function()
{

    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'login_check'])->name('login_check');
    Route::get('/register', [AuthController::class, 'register'])->name('register');

});

Route::group(['middleware'=> 'auth'], function()
{

    Route::get('/logout', [KangarooController::class, 'logout'])->name('logout');
    Route::get('/home', [KangarooController::class, 'home'])->name('home');
    Route::post('/new-kangaroo', [KangarooController::class, 'new_kangaroo'])->name('new_kangaroo');
    Route::get('/get-kangaroo/{id}', [KangarooController::class, 'get_kangaroo'])->name('get_kangaroo');
    Route::post('/update-kangaroo', [KangarooController::class, 'update_kangaroo'])->name('update_kangaroo');
});

