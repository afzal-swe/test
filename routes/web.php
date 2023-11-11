<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;


Route::get('/', function () {
    return view('welcome');
});


Route::prefix('author')->group(function () {

    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/view-user', [CrudController::class, 'view_user'])->name('view.user');
        Route::get('/create-user', [CrudController::class, 'create_user'])->name('create.user');
        Route::post('/add-user', [CrudController::class, 'add_user'])->name('add.user');
        Route::get('/user/edit/{id}', [CrudController::class, 'user_edit'])->name('edit.user');
        Route::post('/user/update/{id}', [CrudController::class, 'user_update'])->name('update.user');
        Route::get('/delete-user/{id}', [CrudController::class, 'user_delete'])->name('delete.user');
    });
});

require __DIR__ . '/auth.php';
