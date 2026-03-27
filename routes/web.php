<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Rotas públicas
Route::middleware('guest')->group(function () {
    // Exibe a view de Login
    Route::get('/login', [AuthController::class, 'create'])->name('login');
    // Processa o Login
    Route::post('/login', [AuthController::class, 'store']);
    // Exibe a view de cadastro
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    // Processa o cadastro
    Route::post('/register', [RegisteredUserController::class, 'store']);
});

// Rotas protegidas
Route::middleware('auth')->group(function () {
    // Apenas redireciona para a rota do dashboard
    Route::get('/', function () {return redirect()->route('dashboard');});
    // Logout
    Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');
    // Exibe a view Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
