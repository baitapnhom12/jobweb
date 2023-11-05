<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DetailjobController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserAdminController;

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


    Route::resource('/', HomeController::class);
    Route::resource('chi-tiet-cong-viec', DetailjobController::class);
    Route::resource('dia-diem', LocationController::class);
    Route::post('check_login', 'UserController@check_login');
    Route::get('log_out', 'UserController@log_out');
    Route::resource('dang-nhap', UserController::class);
    Route::resource('gioi-thieu', AboutController::class);
    Route::resource('tin-tuc', NewsController::class);
    Route::resource('tim-kiem', SearchController::class);
    
        Route::resource('nha-tuyen-dung', JobsController::class);
        Route::resource('danh-sach-ung-vien', CustomerController::class);
    
    Route::middleware(['auth'])->group(function () {
        
        Route::resource('dashboard', DashboardController::class);
    });
    
   
        
        Route::post('insert_roleuser/{id}', [UserAdminController::class,'insert_roleuser']);
   
    
    Route::resource('role', RoleController::class);
    Route::group(['middleware' => ['permission:articles|add articles']], function () {
        //
        Route::resource('user', UserAdminController::class);
    });
    
   
    
   
    

