<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'author', 'as' => 'author.'], function () {
    //Route::group(['middleware'=>['authx'],'prefix'=>'author','as'=>'author.'], function(){



    Route::group(['prefix' => 'contact-us', 'as' => 'contact_us'], function () {
    });
    /** Booking Route New end */
});
