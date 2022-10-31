<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProducerController;
use App\Http\Controllers\Admin\hanghoaController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CartController;
use App\Models\Category;
use App\Models\Producer;

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

Route::get('/login', [AuthController::class, 'index'])->name('login-page');
Route::post('/login', [AuthController::class, 'login']);

Route::prefix('index')->group(function(){

    Route::get('/', [IndexController::class, 'show'])->name('index');

});


Route::prefix('dashboard')->group(function(){

    Route::get('/', [AuthController::class, 'dashboard'])->name('dashboard');


    //Category
    Route::prefix('category')->group(function(){
        Route::get('/create', [CategoryController::class, 'create'])->name('category-create');
        Route::post('/create', [CategoryController::class, 'store']);
        Route::get('/list', [CategoryController::class, 'index'])->name('list-category');
        Route::get('/edit/{id}', [CategoryController::class, 'show'])->name('show-category');
        Route::post('/edit/{id}', [CategoryController::class, 'update']);
        Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('delete-category');
    });

    //hanghoa
    Route::prefix('hanghoa')->group(function(){
        Route::get('/create',[hanghoaController::class, 'create'])->name('hanghoa-create');
        Route::post('/create',[hanghoaController::class, 'store']);
        Route::get('/list',[hanghoaController::class, 'index'])->name('hanghoa-list');
        Route::get('/delete/{id}', [hanghoaController::class, 'destroy'])->name('delete-hanghoa');
        Route::post('/edit/{id}', [hanghoaController::class, 'update']);
        Route::get('/edit/{id}', [hanghoaController::class, 'show'])->name('show-hanghoa');
    });
    //producer
    Route::prefix('producer')->group(function(){
        Route::get('/create',[ProducerController::class, 'create'])->name('producer-create');
        Route::post('/create',[ProducerController::class, 'store']);
        Route::get('/list',[ProducerController::class, 'index'])->name('producer-list');
        Route::get('/delete/{id}', [ProducerController::class, 'destroy'])->name('delete-producer');
        Route::post('/edit/{id}', [ProducerController::class, 'update']);
        Route::get('/edit/{id}', [ProducerController::class, 'show'])->name('show-producer');
    });
    //staff
    Route::prefix('staff')->group(function(){
        Route::get('/create',[StaffController::class, 'create'])->name('staff-create');
        Route::post('/create',[StaffController::class, 'store']);
        Route::get('/list',[StaffController::class, 'index'])->name('staff-list');
        Route::get('/delete/{id}', [StaffController::class, 'destroy'])->name('delete-staff');
        Route::post('/edit/{id}', [StaffController::class, 'update']);
        Route::get('/edit/{id}', [StaffController::class, 'show'])->name('show-staff');
    });
    //client
    Route::prefix('client')->group(function(){
        Route::get('/create',[ClientController::class, 'create'])->name('client-create');
        Route::post('/create',[ClientController::class, 'store']);
        Route::get('/list',[ClientController::class, 'index'])->name('client-list');
        Route::get('/delete/{id}', [ClientController::class, 'destroy'])->name('delete-client');
        Route::post('/edit/{id}', [ClientController::class, 'update']);
        Route::get('/edit/{id}', [ClientController::class, 'show'])->name('show-client');
    });
    //order
    Route::prefix('order')->group(function(){
        Route::get('/add/{id}',[OrderController::class, 'add'])->name('order-add');
        Route::post('/add/{id}',[OrderController::class, 'store']);
        Route::get('/list',[OrderController::class, 'index'])->name('order-list');
        Route::get('/delete/{id}', [OrderController::class, 'destroy'])->name('delete-order');
    });
    //cart
    Route::prefix('order')->group(function(){
        Route::get('/cart/{id}',[CartController::class, 'store'])->name('cart-add');
        Route::get('/list/{id}',[CartController::class, 'index_cart'])->name('order-cart');
    });
});

