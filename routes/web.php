<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactanosController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () {return view('welcome');});


// Route::get('/category/{id}', function ($id) {
//     return view('category')->name('category');
// });








Route::group(['prefix'=>'admin'], function(){
    Route::resource('categorias/subcategorias', SubcategoryController::class);
    });

Route::group(['prefix'=>'admin'], function(){
    Route::resource('/categorias', CategoryController::class);
});

// Route::get('/product-description', function () {
//     return view('product-description');

Route::get('subcategorias/descripcion de producto', function () {
    return view('product-description');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');





Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');

Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

Route::get('category/{id}', [CategoryController::class, 'index'])->name('category');

Route::get('subcategory/{id}', [SubcategoryController::class, 'index'])->name('subcategory');

Route::get('product-description/{id}', [ProductController::class, 'index'])->name('product-description');