<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\AttributeValueController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ImagesProductController;
use App\Http\Controllers\ValueController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\SubcategoryController;




Route::get('/', [HomeController::class, 'index']);

Route::resource('category', CategoryController::class);
Route::post('category/updateStatus', [CategoryController::class, 'updateStatus'])->name('category.updateStatus');
Route::post('category/updateRecommended', [CategoryController::class, 'updateRecommended'])->name('category.updateRecommended');
Route::post('category/updateOutstanding', [CategoryController::class, 'updateOutstanding'])->name('category.updateOutstanding');

Route::resource('subcategory', SubcategoryController::class);
Route::post('subcategory/updateStatus', [SubcategoryController::class, 'updateStatus'])->name('subcategory.updateStatus');

Route::resource('tag', TagController::class);
Route::post('tag/updateStatus', [TagController::class, 'updateStatus'])->name('tag.updateStatus');


Route::resource('document', DocumentController::class);
Route::post('document/updateStatus', [DocumentController::class, 'updateStatus'])->name('document.updateStatus');

Route::resource('attribute', AttributeController::class);
Route::post('attribute/updateStatus', [AttributeController::class, 'updateStatus'])->name('attribute.updateStatus');

//Route::resource('atributosValue', AttributeValueController::class);
//Route::post('atributosValue/updateStatus', [AttributeValueController::class, 'updateStatus'])->name('atributosValue.updateStatus');
//Route::post('atributosValue/crearAttribute', [AttributeValueController::class, 'crearAttribute'])->name('atributosValue.crearAttribute');

Route::resource('value', ValueController::class);
Route::post('value/updateStatus', [ValueController::class, 'updateStatus'])->name('value.updateStatus');
Route::post('value/crearAttribute', [ValueController::class, 'crearAttribute'])->name('value.crearAttribute');

Route::resource('product', ProductController::class);
Route::post('product/updateStatus', [ProductController::class, 'updateStatus'])->name('product.updateStatus');
Route::post('product/updateRecommended', [ProductController::class, 'updateRecommended'])->name('product.updateRecommended');
Route::post('product/updateOutstanding', [ProductController::class, 'updateOutstanding'])->name('product.updateOutstanding');

Route::resource('imagesProduct', ImagesProductController::class);
//Route::delete('imageProduct/deleteImage', [ImagesProductController::class, 'deleteImage'])->name('imageProduct/deleteImage');

Route::resource('front', FrontController::class);