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
	return view('home');
});
Route::get('/laravel', function () {
	return view('welcome');
});
Route::get('/account_types/{id}/confirm_delete', 'AccountTypeController@confirmDelete');
Route::get('/accounts/{id}/confirm_delete', 'AccountController@confirmDelete');
Route::get('/banks/{id}/confirm_delete', 'BankController@confirmDelete');
Route::get('/categories/{category}/confirm_delete', 'CategoryController@confirmDelete');
Route::resources([
	'/account_types' => 'AccountTypeController',
	'/accounts' => 'AccountController',
	'/banks' => 'BankController',
	'/categories' => 'CategoryController',
	'/comments' => 'CommentController',
	'/document_types' => 'DocumentTypeController',
	'/holders' => 'HolderController',
	'/statuses' => 'StatusController',
	'/transactions' => 'TransactionController',
]);
