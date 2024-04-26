<?php

use App\Http\Controllers\Billing;
use Illuminate\Support\Facades\Route;

Route::get('/hj', function () {
    return view('welcome');
});

Route::get('/main', [Billing::class, 'mb']);

Route::get('/', function () {
    return view('index');
});


Route::get('/dishes', [Billing::class, 'dish']);
Route::get('/manage', [Billing::class, 'manage']);
Route::get('/addwaiter', [Billing::class, 'addwaiter']);
Route::post('/addwaiter', [Billing::class, 'add_waiter']);


Route::get('/addtable', [Billing::class, 'addtable']);
Route::post('/addtable', [Billing::class, 'add_table']);


Route::get('/add_dish', [Billing::class, 'adddish']);
Route::post('/add_dish', [Billing::class, 'newDish']);

Route::get('/generateBill', [Billing::class, 'generateBill']);

Route::post('/generate_bill', [Billing::class, 'generate_Bill']);


Route::get('/editdish/{id}', [Billing::class, 'editdish']);

Route::post('/editdish/{id}', [Billing::class, 'edit_dish']);
Route::get('/deletedish/{id}', [Billing::class, 'deleteDish']);
Route::get('/dishpricerecord', [Billing::class, 'dishpricerecord']);

Route::get('/orderhistory', [Billing::class, 'orderhistory']);
Route::get('/viewbill/{id}', [Billing::class, 'viewbill']);
