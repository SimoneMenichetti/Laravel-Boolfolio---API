<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProjectController;

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
// rotte per Project
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/project-by-slug/{slug}', [ProjectController::class, 'projectBySlug']);
// rotte per Types

Route::get('/types', [ProjectController::class, 'index']);
Route::get('/type-by-slug/{slug}', [ProjectController::class, 'typeBySlug']);

// rotte per Technology

Route::get('/technologies', [ProjectController::class, 'index']);
Route::get('/tech-by-slug/{slug}', [ProjectController::class, 'techBySlug']);
