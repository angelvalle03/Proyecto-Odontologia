<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\DoctoresController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UserController;



Route::get('',[AdminController::class, 'index'])->name('admin.index');

// Route::resource('categories', CategoryController::class)->names('admin.categories');
// Route::resource('products', ProductController::class)->names('admin.products');
Route::resource('users', UserController::class)->only(['index','edit','update'])->names('users');
Route::resource('horarios', HorarioController::class)->except('show')->names('horarios');
Route::resource('roles', RolController::class)->except('show')->names('roles');
Route::resource('citas', CitasController::class)->except('show')->names('citas');
Route::resource('doctores', DoctoresController::class)->except('show')->names('doctores');