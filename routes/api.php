<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Single or Multi Data Show api Route.::::::::::::::
Route::get('/user/{id?}', [UserController::class, 'showUser']); // id ? = ? means optional , we are show single user or multi user showing. (get/fetch)
// create User api function :::::::::::::::::::::::::
Route::post('/users/store', [UserController::class, 'store']);
// Add Multi Data API Roure ::::::::::::::::::::::
Route::post('/add-multiple-user', [UserController::class, 'addMultipleUser']);
// Patch API for Update Route Multiple data::::::::::::::::::::::
Route::put('/update-user-info/{id}', [UserController::class, 'UpdateUserInfo']);
// Put API for Update Route ::::::::::::::::::::::
Route::patch('/update-single-record/{id}', [UserController::class, 'UpdateSingleRecord']);
// Delete API for Delete Single user Route ::::::::::::::::::::::
Route::delete('/delete-single-record/{id}', [UserController::class, 'DeleteSingleRecord']);
// Delete API for Delete Single user with json Route ::::::::::::::::::::::
Route::delete('/delete-single-record-with-json', [UserController::class, 'DeleteSingleRecordJson']);
// Delete API for Delete Multiple user Route ::::::::::::::::::::::
Route::delete('/delete-multiple-record/{ids}', [UserController::class, 'DeleteMultipleRecord']);
// Delete API for Delete Multiple user with json Route ::::::::::::::::::::::
Route::delete('/delete-multiple-record-with-json', [UserController::class, 'DeleteMultipleRecordJson']);



// Page Api Route Section Start ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
use App\Http\Controllers\Api\CrudController;

// Single or Multi Data Show api Route.::::::::::::::
Route::get('/page/{id?}', [CrudController::class, 'ShowPage']);
Route::post('/store/page', [CrudController::class, 'store']);
Route::delete('/delete/page/{id}', [CrudController::class, 'destroy']);
Route::patch('/update/page/{id}', [CrudController::class, 'update']);
