<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return 'Available Jobs';
})->name('jobs');

Route::any('/submit', function () {
    return 'Submitted';
});

Route::get('/post/{id}', function (string $id) {
    return 'Post ' . $id;
})->whereNumber('id');

Route::get('/posts/{id}/comments/{commentId}', function (string $id, string $commentId) {
    return 'Post ' . $id . 'Comment ' . $commentId;
});