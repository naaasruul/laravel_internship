<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CollectionLabController;
Route::get('/home',[HomeController::class,'index'] );
Route::get('/',[CollectionLabController::class,'index'] );
 
