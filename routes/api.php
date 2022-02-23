<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

///Added for Testing
use Illuminate\Support\Facades\DB;
use \App\Models\Profile;

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

Route::get('/', function () {
    $users = DB::table('profiles')->get();
    return $users;
});

Route::get('/p', function () {
    $users = Profile::all();
    return $users;
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
