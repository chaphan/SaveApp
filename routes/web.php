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
    return view('home.index');
});
Route::get('/idea/view', function () {
    return view('ideas');
});
Route::get('/products/view', function () {
    return view('products');
});
Route::get('/project/view', function () {
    return view('projects');
});

Route::get('/members/{id}', 'Members@show');

Route::post('/members/create', 'Citizens@create');

Route::get('/members/create', 'Members@create');

Route::post('/members/save', 'Members@store');


Route::get('/groups', 'Groups@show');

Route::post('/group/create', 'Groups@create');

Route::post('/groups/save', 'Groups@store');
Route::get('/groups/{groupid}', 'Groups@show');

Route::get('/savings/{groupid}', 'Savings@show');

Route::post('/saving/create', 'Savings@create');

Route::get('/savings/create', 'Savings@create');

Route::post('/savings/save', 'Savings@store');



Route::get('/products', 'Products@show');

Route::post('/products/create', 'Products@create');

Route::get('/products/create', 'Products@create');

Route::get('/products/store', 'Products@store');
Route::get('/products/{productid}', 'Products@show');
