<?php

use FjordApp\Controllers\BootstrapController;

Route::get('/', FjordApp\Controllers\DashboardController::class)->name('dashboard');


Route::get('bootstrap', [BootstrapController::class, 'bootstrap'])->name('bootstrap');
