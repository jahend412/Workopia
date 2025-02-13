<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
// use Illuminate\Http\Response; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return 'Available Jobs';
})->name('jobs');

Route::get('/test', function(Request $request) {
    return [
        'method' => $request->method(),
        'url' => $request->url(),
        'path' => $request->path(),
        'fullUrl' => $request->fullUrl(),
        'ip' => $request->ip(),
        'userAgent' => $request->userAgent(),
        'method' => $request->method(),
    ];
});

Route::get('/users', function(Request $request) {
    return $request->except(['name']);
});

Route::get('/test', function() {
    return response()->json(['name' => 'John Doe'])->cookie('name', 'John Doe');
});


Route::get('/download', function() {
    return response()->download(public_path('favicon.ico'));
});

Route::get('/error', function() {
    return response('Not Found', 404);
});


Route::get('/read-cookie', function() {
    $cookieValue = $request->cookie('name');
    return response()->json(['cookie'=> $cookieValue]);
});