<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParcelleController;

Route::get('/', function () {
    return redirect('/parcelles');
});

Route::resource('parcelles', ParcelleController::class);