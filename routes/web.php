<?php

use App\Core\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Core\Controllers\Frontend;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::redirect('/', destination: '/login');

//Admin routes
Route::Get('/dashboard_admin', [Frontend\Admin\DashboardController::class, 'index']) -> middleware('role:2')->name('dashboard_admin');
Route::Get('/user_panel', [Frontend\Admin\UserPanelController::class, 'index']) -> middleware('role:2')->name('user_panel');




Route::Get('/dashboard_authorized', [Frontend\Authorized\DashboardController::class, 'index']) -> middleware('role:1')->name('dashboard_authorized');


//Route::get('/dashboard', function ()
//{
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function ()
{
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
