<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\product;
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

Route::get('/', [product::class, 'product_list']);
Route::get('add_product/', [product::class, 'add_product']);
Route::post('/add_item', [product::class, 'addItem'])->name('add_item');
Route::post('/view_table', [product::class, 'viewTable'])->name('view_table');