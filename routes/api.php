<?php

use App\Http\Controllers\studentsController;
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

Route::get('students',[studentsController::class, 'index']);
Route::get('students/{id}',[studentsController::class, 'index']);
Route::delete('students/delete/{id}',[studentsController::class,'destroy']);
Route::post('students',[studentsController::class,'create']);
Route::put('students/{id}',[studentsController::class,'update']);
