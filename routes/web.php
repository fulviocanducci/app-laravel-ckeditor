<?php

use App\Http\Controllers\EditorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/editor', [EditorController::class, "index"]);
