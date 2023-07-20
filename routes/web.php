<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

Route::controller(CategoryController::class)
-> group(function () {
    Route::get('/', 'main')->name('main');
    Route::get('/categories', 'index')->name('category-list');
    Route::get('/items', 'items')->name('items-list');
    Route::get('/pivot-table', 'table')->name('pivot-table');
});

Route::get('/telescope',[TelescopeServiceProvider::class,'gate']);
