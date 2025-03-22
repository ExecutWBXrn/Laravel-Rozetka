<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/contact/', function () {
    return view('contact');
});

Route::controller(JobController::class)->group(function () {
    Route::get('/jobs/', 'index');
    Route::get('/jobs/create', 'create');
    Route::post('/jobs/creating', 'creating');
    Route::get('/jobs/{job}', 'show');
    Route::get('/jobs/{job}/edit', 'edit');
    Route::patch('/jobs/{job}', 'editing');
    Route::delete('/jobs/{job}', 'destroy');
});

