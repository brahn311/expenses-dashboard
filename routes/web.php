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

Route::get('/laravel', function () {
	return view('welcome');
});
Route::resource('/accounts', 'AccountController');
Route::resources([
	'/account_types' => 'AccountTypeController',
	'/banks' => 'BankController'
]);
Route::get('/banks/{id}/confirm_delete', 'BankController@confirmDelete');
Route::get('/account_types/{id}/confirm_delete', 'AccountTypeController@confirmDelete');
Route::get('/accounts/{id}/confirm_delete', 'AccountController@confirmDelete');
