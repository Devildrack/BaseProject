<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;

/* Route::get('', function() {
    return 'PANEL ADMINISTRATIVO';
}); */

Route::get('', [AdminController::class, 'index']);
