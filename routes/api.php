<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChildrenProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CompletedTaskController;
use App\Http\Controllers\PunishmentController;
use App\Http\Controllers\AvailableRewardController;
use App\Http\Controllers\RedeemedRewardsHistoryController;

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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::post('register', [AuthController::class,'register']);
Route::post('login', [AuthController::class,'login'])->name('login');

Route::middleware('auth:sanctum')->group( function () {
    Route::get('logout', [AuthController::class,'logout']);
    Route::apiResource('users', UserController::class);
});
// Rutas de Usuario



// Rutas de Perfiles de Niños
Route::apiResource('children-profiles', ChildrenProfileController::class);

// Rutas de Tareas y Tareas Completadas
Route::apiResource('tasks', TaskController::class);
Route::apiResource('completed-tasks', CompletedTaskController::class);

// Rutas de Castigos
Route::apiResource('punishments', PunishmentController::class);

// Rutas de Recompensas
Route::apiResource('available-rewards', AvailableRewardController::class);

// Rutas de Historial de Recompensas Canjeadas
Route::apiResource('redeemed-rewards-history', RedeemedRewardsHistoryController::class);
