<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/students', [StudentController::class, 'index']);
Route::get('/single/student/{id}', [StudentController::class, 'View_student']);
Route::post('/add/student', [StudentController::class, 'add_student']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});