<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Make two Rest Api routes

//all
Route::get('/listing', function () {

    if (!Listing::all()->isEmpty()) {
        //dd(response())
        return response()->json(Listing::all());
    }

    return response()->json(["error" => "No listings found"], 404);
});

//find by id
Route::get('/listing/{id}', function ($id) {

    if (Listing::find($id)) {
        //dd(response())
        return response()->json(Listing::all()->find($id));
    }

    return response()->json(["error" => "Invalid id: $id"], 404);
});