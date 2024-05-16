<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/activities', [ActivitiesController::class, 'activities'])->name('activities');