<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();  // Rutas de autenticación predeterminadas

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas para los usuarios
Route::resource('users', UserController::class);

// Rutas para los roles
Route::resource('roles', RoleController::class);

// Rutas para los permisos
Route::resource('permissions', PermissionController::class);