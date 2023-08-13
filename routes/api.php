<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoryController;

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

// Route::get('/user',[HomeController::class, "user"]);
// Route::post('/addUser',[HomeController::class, "addUser"]);
// Route::post('/updateUser',[HomeController::class, "updateUser"]);
// Route::delete('/deleteUser/{id}',[HomeController::class, "deleteUser"]);

//=======================STORY============================

Route::get('/story',[StoryController::class, "getStory"]);

Route::post('/addstory',[StoryController::class, "addStory"]);

Route::post('/updatestory',[StoryController::class, "updateStory"]);

Route::post('/deletestory',[StoryController::class, "deleteStory"]);

//=======================PAGE=============================