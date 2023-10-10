<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;

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


Route::get('students', [StudentController::class, 'index']);
Route::post('students', [StudentController::class, 'store']);
Route::get('fetchUserData/{id}', [StudentController::class, 'show'])->name('fetchUserData');
Route::get('fetchUserData', [StudentController::class, 'editPageshow']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
