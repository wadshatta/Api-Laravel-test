<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FileController;


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::apiResource('member',MemberController::class);
    Route::get("data",[dummyAPI::class,"getData"]);
    Route::get('list',[DeviceController::class,"list"]);
    Route::get('listparms/{id?}',[DeviceController::class,"listparms"]);
    Route::post('add',[DeviceController::class,"add"]);

    Route::put('update',[DeviceController::class,"update"]);

    Route::get('search/{name}',[DeviceController::class,"search"]);

    Route::delete('Delete/{id}',[DeviceController::class,"Delete"]);

    Route::delete('save',[DeviceController::class,"testData"]);

    Route::post('upload',[FileController::class,"upload"]);

    });










Route::post("login",[UserController::class,'index']);


/*
update
*/

