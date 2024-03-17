<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HOmeController;





Route::get('/admin', [AdminController::class, 'index']);
Route::get('add_product', [AdminController::class, 'addproducts']);
Route::post('add_product', [AdminController::class, 'store']);
Route::get('list_product', [AdminController::class, 'product_list']);
Route::get('/deleteproduct/{id}', [AdminController::class, 'deleteProduct']);
Route::get('/editproduct/{id}', [AdminController::class, 'edit_product']);
// Route::post('/updateproducts/{id}', [AdminController::class, 'update']);
Route::post('updateproducts/{id}', [AdminController::class, 'updateproducts']);





Route::get('/', [HomeController::class, 'index']);
