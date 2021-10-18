<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/Home', function () {return view('Home');})->name('Home');

// Registration form
Route::get('/Register', App\Http\Controllers\Pages\register::class)->name('register');


// Login Page
Route::get('/Login', App\Http\Controllers\Pages\Login::class)->name('Login');


// the Cashier page Insert and view Edit and delete...
Route::get('/Cashier', App\Http\Controllers\Cashier\Index::class)->name('Cashier');
Route::get('/Cashier/Create', App\Http\Controllers\Cashier\Create::class)->name('Create');
Route::get('/Cashier/View', App\Http\Controllers\Cashier\View::class)->name('View');
Route::get('/Cashier/View/Edit/{user:username}', App\Http\Controllers\Cashier\Edit::class)->name('Edit');



// The Supplier page insert and view and delete it...
Route::get('/Supplier', App\Http\Controllers\Supplier\Index::class)->name('Supplier');
Route::get('/Supplier/Create', App\Http\Controllers\Supplier\Create::class)->name('CreateSupplier');
Route::get('/Supplier/View', App\Http\Controllers\Supplier\View::class)->name('ViewSupplier');



// The Buy page insert and view and delete ,Edit...
Route::get('/Buy', App\Http\Controllers\Buy\Index::class)->name('Buy');
Route::get('/Buy/Create', App\Http\Controllers\Buy\Create::class)->name('BuyStocks');
Route::get('/Buy/{stock:name}/Edit', App\Http\Controllers\Buy\Edit::class)->name('EditStocks');




// The Expire stock displays
Route::get('/ExpireStock', App\Http\Controllers\ExpireStock::class)->name('ExpireStock');

// The NotLeft page displays
Route::get('/NotLeft', App\Http\Controllers\NotLeft::class)->name('NotLeft');


// The DebtList Page displays
Route::get('/DebtList', App\Http\Controllers\DebtList::class)->name('DebtList');





// The Dashboard Page displays
Route::get('/Dashboard', App\Http\Controllers\Admin\Dashboard::class)->name('Dashboard');





