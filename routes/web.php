<?php

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
    return view('index');
});

Route::get('/members', 'Members@show');
<<<<<<< HEAD
Route::post('/members/create', 'Members@create');
=======
Route::get('/members/create', 'Members@create');
>>>>>>> 4f5d4e7affde775fea983d68714efab6150ab35a
Route::post('/members/save', 'Members@store');


Route::get('/groups', 'Groups@show');
<<<<<<< HEAD
Route::post('/groups/create', 'Groups@create');
=======
Route::get('/groups/create', 'Groups@create');
>>>>>>> 4f5d4e7affde775fea983d68714efab6150ab35a
Route::post('/groups/save', 'Groups@store');
Route::get('/groups/{groupid}', 'Groups@show');

Route::get('/savings/{groupid}', 'Savings@show');
<<<<<<< HEAD
Route::post('/savings/create', 'Savings@create');
=======
Route::get('/savings/create', 'Savings@create');
>>>>>>> 4f5d4e7affde775fea983d68714efab6150ab35a
Route::post('/savings/save', 'Savings@store');



Route::get('/products', 'Products@show');
<<<<<<< HEAD
Route::post('/products/create', 'Products@create');
=======
Route::get('/products/create', 'Products@create');
>>>>>>> 4f5d4e7affde775fea983d68714efab6150ab35a
Route::get('/products/store', 'Products@store');
Route::get('/products/{productid}', 'Products@show');
