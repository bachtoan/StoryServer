<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SoundController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\TouchableController;

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

//=======================STORY===============================================================

Route::get('/story',[StoryController::class, "getStory"]);

Route::post('/addstory',[StoryController::class, "addStory"]);

Route::post('/updatestory',[StoryController::class, "updateStory"]);

Route::post('/deletestory',[StoryController::class, "deleteStory"]);

//=======================PAGE================================================================

Route::get('/getallpage',[PageController::class, "getAllPage"]);

Route::post('/getstorypage',[PageController::class, "getStoryPage"]);

Route::post('/addpage',[PageController::class, "addPage"]);

Route::post('/updatepage',[PageController::class, "updatePage"]);

Route::post('/deletepage',[PageController::class, "deletePage"]);

//=======================Sound============================================================

Route::get('/getsounds',[SoundController::class, "getSounds"]);

Route::post('/addsound',[SoundController::class, "addSound"]);

Route::post('/updatesound',[SoundController::class, "updateSound"]);

Route::post('/deletesound',[SoundController::class, "deleteSound"]);

//=======================Content==========================================================

Route::get('/getcontents',[ContentController::class, "getContents"]);

Route::post('/addcontent',[ContentController::class, "addContent"]);

Route::post('/updatecontent',[ContentController::class, "updateContent"]);

Route::post('/deletecontent',[ContentController::class, "deleteContent"]);

//=======================Touchable========================================================

Route::get('/gettouchable',[TouchableController::class, "getTouchable"]);

Route::post('/addtouchable',[TouchableController::class, "addTouchable"]);

Route::post('/updatetouchable',[TouchableController::class, "updateTouchable"]);

Route::post('/deletetouchable',[TouchableController::class, "deleteTouchable"]);





