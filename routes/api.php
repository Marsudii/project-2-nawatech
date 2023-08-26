<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ManipulateApi;
use App\Http\Controllers\Api\SortApi;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
//ROUTING MANIPULATE DATA

Route::get('manipulate/data', [ManipulateApi::class, 'dataManipulate']);

//ROUTING SORT API FROM API JSON
// Route::get('sort/json', [SortApi::class, 'sortApi']);

