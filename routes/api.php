<?php
use App\Core\Controllers\Api\WarehouseController;
use App\Core\Controllers\Api\UserController;
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

//Route::resource('post', PostController::class);

Route::prefix('user') -> group(function()
{
    Route::Get('/show_all', [UserController::class, 'index']);
    Route::Get('/show/{user:id}', [UserController::class, 'show']);
    Route::Post('/create', [UserController::class, 'store']);
    Route::patch('/update/{user:id}', [UserController::class, 'update']);
    Route::delete('/delete/{user:id}', [UserController::class, 'delete']);
});

Route::prefix('warehouse') -> group(function()
{
    Route::Get('/show_all', [WarehouseController::class, 'index']);
    Route::Get('/show/{warehouse:id}', [WarehouseController::class, 'show']);
    Route::Post('/create', [WarehouseController::class, 'store']);
    Route::patch('/update/{warehouse:id}', [WarehouseController::class, 'update']);
    Route::delete('/delete/{warehouse:id}', [WarehouseController::class, 'delete']);

    Route::Patch('/assign', [WarehouseController::class, 'assign']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
