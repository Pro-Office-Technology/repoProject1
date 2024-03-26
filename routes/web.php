<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexingController;
use App\Http\Controllers\IndexFieldController;
use App\Http\Controllers\RecordTypeController;


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



    Route::group(['prefix' => 'indexfield', 'as' => 'indexfield.'], function () {
        Route::get('/', [IndexFieldController::class, 'index'])->name('index');
        Route::get('add', [IndexFieldController::class, 'add'])->name('add');
        Route::post('add', [IndexFieldController::class, 'save'])->name('save');
        Route::get('edit/{id}', [IndexFieldController::class, 'edit'])->name('edit');
        Route::post('edit/{id}', [IndexFieldController::class, 'update'])->name('update');
        Route::get('delete/{id}', [IndexFieldController::class, 'delete'])->name('delete');
        });

    Route::group(['prefix' => 'indexing', 'as' => 'indexing.'], function () {
        Route::get('/', [IndexingController::class, 'index'])->name('index1');
        Route::post('/', [IndexingController::class, 'store']);
        Route::get('/{id}', [IndexingController::class, 'show'])->name('show');

    });
    Route::group(['prefix' => 'register1', 'as' => 'register1.'], function () {
         Route::get('/', [RecordTypeController::class, 'index'])->name('index');
         Route::get('add', [RecordTypeController::class, 'add'])->name('add');
         Route::post('add', [RecordTypeController::class,'store'])->name('store');
         Route::get('/show', [RecordTypeController::class,'show'])->name('show');
         Route::get('delete/{id}', [RecordTypeController::class, 'delete'])->name('delete');

        });

});

