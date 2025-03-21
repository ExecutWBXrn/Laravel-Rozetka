<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs/', function (){
    $data = Job::with('employer')->cursorPaginate(5);
    return view('jobs', ['data' => $data]);
});

Route::get('/jobs/{id}', function ($id){
    $data = Job::all();
    return view('job', ['data' => Job::find($id)]);
});

Route::get('/contact/', function () {
    return view('contact');
});
