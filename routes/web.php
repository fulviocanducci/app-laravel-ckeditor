<?php

use App\Http\Controllers\EditorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/editor', [EditorController::class, "index"]);
Route::post('/editor/store', [EditorController::class, "store"])->name('editor.store');
