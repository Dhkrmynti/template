<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/users', function () {
    return view('users');
})->name('users.index');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');

Route::get('/customers', function () {
    return view('customers');
})->name('customers');

Route::get('/finances', function () {
    return view('finances');
})->name('finances');

Route::get('/logs', function () {
    return view('logs');
})->name('logs');

Route::get('/notifications', function () {
    return view('notifications');
})->name('notifications');

Route::get('/files', function () {
    return view('files');
})->name('files');

Route::get('/support', function () {
    return view('support');
})->name('support');
