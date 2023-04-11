<?php
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Barryvdh\Debugbar\Facades\Debugbar;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
//home
Route::get("/",[ListingController::class,'index']); 
//create form
Route::get('/listings/create',[ListingController::class,'create'])->middleware('auth');
//submit create form
Route::post('/listings-create',[ListingController::class,'store'])->middleware('auth');
//edit form
Route::get('listings/{id}/edit',[ListingController::class,'edit'])->middleware('auth');
//submit edit form
Route::put('/edit-listings/{id}',[ListingController::class,'update'])->middleware('auth');
//delete btn.
Route::delete('/delete-listings/{id}',[ListingController::class,'destroy'])->middleware('auth');
//Registration form
Route::get('/register',[UserController::class,'registrate'])->middleware('guest');
//submit registrate form
Route::post('/new-user',[UserController::class,'store']);
//logout
Route::post('/logout',[UserController::class,'logout'])->middleware('auth');
//login form
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');
//login for submit
Route::post('/login-user',[UserController::class,'loginUser']);
//admin dashboard
Route::get("/listings/manage",[ListingController::class,'manage'])->middleware('auth');
//single listing by id.
Route::get('/listings/{listing}',[ListingController::class,'show']);



