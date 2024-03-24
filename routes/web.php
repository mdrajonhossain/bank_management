<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UserController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\Bangladesh_bankController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear'); 
    return "Cleared!"; 
 });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::middleware(['auth', 'is_User'])->prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'userpanal']);
    Route::get('/fdr', [UserController::class, 'userfdr']);
    
    Route::post('/fdrformsend', [UserController::class, 'fdrformsend']);
    Route::get('/fdrformsend', [UserController::class, 'get_fdrformsend']);
});



Route::middleware(['auth', 'is_Branch'])->prefix('branch')->group(function () {
    Route::get('/', [BranchController::class, 'branchpanal']);
});


Route::middleware(['auth', 'is_Bank'])->prefix('bank')->group(function () {
    Route::get('/', [BankController::class, 'bankpanal']);
});



Route::middleware(['auth', 'is_BangladeshBank'])->prefix('bangladeshBank')->group(function () {
    Route::get('/', [Bangladesh_bankController::class, 'Bangladesh_bankpanal']);
});