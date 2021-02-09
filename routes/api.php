<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hspCmsController;
use App\Http\Controllers\cmsLogController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/cmsCall',[hspCmsController::class,'cmsAdd']);
Route::get('/cmsCallLog',[cmsLogController::class,'callLog'])->name('cmsCallDetails');