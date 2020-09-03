<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   return Inertia::render('BuildBowl', ['foo'=>'bar']);
});

Route::get('/about', function () {
    return Inertia::render('About', ['foo'=>'bar']);
});

Route::get('/contacts', function () {
    return Inertia::render('Contacts', ['foo'=>'bar']);
});

//Route::get('/ingredients', 'Ingredient'
