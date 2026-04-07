<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaudeController;

Route::get('/', [SaudeController::class, 'index']);

Route::get('/imc', [SaudeController::class, 'imcForm']);
Route::post('/imc', [SaudeController::class, 'calcularIMC']);

Route::get('/sono', [SaudeController::class, 'sonoForm']);
Route::post('/sono', [SaudeController::class, 'avaliarSono']);

Route::get('/viagem', [SaudeController::class, 'viagemForm']);
Route::post('/viagem', [SaudeController::class, 'calcularViagem']);