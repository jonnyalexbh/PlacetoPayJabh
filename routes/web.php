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

Route::view('/', 'index');
Route::view('invoice', 'payment.index')->name('invoice');
Route::get('pay', 'PaymentController@index')->name('pay');
Route::get('transactions', 'TransactionController@index')->name('transactions');
Route::get('transaction/{id}', 'TransactionController@show')->name('s.transaction');
Route::post('transaction', 'TransactionController@store')->name('transaction');
