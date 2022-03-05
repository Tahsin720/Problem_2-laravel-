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
Route::get('add_variant/', [product::class, 'add_variant']);
Route::post('/add_item_variant', [product::class, 'addItemvariant'])->name('add_item_variant');
Route::post('/view_table', [product::class, 'viewTable'])->name('view_table');

Route::get('registration3/', [product::class, 'registration3']);
Route::post('/register_user_3', [Curd_operation::class, 'registerUser_3'])->name('register_user_3');
Route::get('registration2/', [product::class, 'registration2']);
Route::post('/register_user_2', [product::class, 'registerUser_2'])->name('register_user_2');