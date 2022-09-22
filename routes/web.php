<?php

use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\CustomersController;
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
    return view('index');
});

Route::get('/invoices', [InvoicesController::class, 'index'])->name('invoices.index');

Route::get('/invoices/create', [InvoicesController::class, 'create'])->name('invoices.create');

Route::post('invoices/store', [InvoicesController::class, 'store'])->name('invoices.store');

Route::get('invoices/edit/{id}', [InvoicesController::class, 'edit'])->name('invoices.edit');

Route::put('invoices/update/{id}', [InvoicesController::class, 'update'])->name('invoices.update');

Route::delete('invoices/delete/{id}', [InvoicesController::class, 'delete'])->name('invoices.delete');

Route::resource('customers', CustomersController::class); 

// Route::resource('klienci', CustomersController::class, ['names' = 'customers']); 
// Jeśli chcemy polskojęzyczne urle a anglojęzyczne nazwy

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
