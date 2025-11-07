<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('index');
});

Route::get('/category', function () {
  return view('category');
});

Route::get('/gallery', function () {
  return view('gallery');
});
