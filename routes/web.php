<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::post('/api/contact', [PortfolioController::class, 'storeContact'])->name('portfolio.contact');
