<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {

    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');



    Route::group(['prefix' => 'products', 'as' => 'products.'], function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('add', [ProductController::class, 'add'])->name('add');
        Route::post('add', [ProductController::class, 'save'])->name('save');
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit');
        Route::post('edit/{id}', [ProductController::class, 'update'])->name('update');
        Route::get('delete/{id}', [ProductController::class, 'delete'])->name('delete');
        });

    Route::group(['prefix' => 'indexing', 'as' => 'indexing.'], function () {
        Route::get('/', [IndexingController::class, 'index'])->name('index1');
        Route::post('/', [IndexingController::class, 'store']);
        Route::get('/{id}', [IndexingController::class, 'show'])->name('show');

    });
    Route::group(['prefix' => 'register1', 'as' => 'register1.'], function () {
         Route::get('/', [RegisterController::class, 'index'])->name('index');
         Route::get('add', [RegisterController::class, 'add'])->name('add');
         Route::post('add', [RegisterController::class,'store'])->name('store');
         Route::get('/show', [RegisterController::class,'show'])->name('show');
         Route::get('delete/{id}', [RegisterController::class, 'delete'])->name('delete');

        });

});

