<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SoundController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DetailStoryController;
use App\Http\Controllers\PageContentController;
use App\Http\Controllers\PageTouchableController;
use App\Http\Controllers\TouchableController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

 Route::middleware('auth:sanctum')->group(function (){
     Route::get('/user',[AuthController::class, "user"]);
     Route::post('/logout',[AuthController::class, "logout"]);

 });

//=======================Auth================================================================
Route::post('/register',[AuthController::class, "register"]);
Route::post('/login',[AuthController::class, "login"]);




//=======================STORY===============================================================

Route::get('/story',[StoryController::class, "getAllStory"]);

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

//=======================PageContent======================================================

Route::post('/getpagecontent',[PageContentController::class, "getPageContents"]);

Route::post('/addpagecontent',[PageContentController::class, "addPageContent"]);

Route::post('/updatepagecontent',[PageContentController::class, "updatePageContent"]);

Route::post('/deletepagecontent',[PageContentController::class, "deletePageContent"]);

//=======================PageTouchable====================================================

Route::post('/getpagetouchables',[PageTouchableController::class, "getPageTouchables"]);

Route::post('/addpagetouchable',[PageTouchableController::class, "addPageTouchable"]);

Route::post('/updatepagetouchable',[PageTouchableController::class, "updatePageTouchable"]);

Route::post('/deletepagetouchable',[PageTouchableController::class, "deletePageTouchable"]);

//=======================DetailStory======================================================

Route::post('/detailstory',[DetailStoryController::class, "getDetailStory"]);






