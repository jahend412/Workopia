<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
// use Illuminate\Http\Response; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return 'jobs.index';
})->name('jobs');

Route::get('/jobs/create', function () {
    return 'jobs.create';
})->name('jobs.create');

