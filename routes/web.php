<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::get('home', [Controller::class, 'home'])->name('home');
Route::get('show/{job}', [Controller::class, 'show'])->name('show');

Route::post('applications/store', [ApplicationController::class, 'store'])->name('applications.store');
Route::get('applications/create/{job}', [ApplicationController::class, 'create'])->name('applications.create');
    

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('jobs/index', [JobController::class, 'index'])->name('jobs.index');
    Route::get('jobs/create', [JobController::class, 'create'])->name('jobs.create');
    Route::post('jobs/store', [JobController::class, 'store'])->name('jobs.store');
    Route::get('jobs/edit/{job}', [JobController::class, 'edit'])->name('jobs.edit');
    Route::post('jobs/update/{job}', [JobController::class, 'update'])->name('jobs.update');
    Route::get('jobs/manage', [JobController::class, 'manage'])->name('jobs.manage');
    Route::get('jobs/show-applications/{job}', [JobController::class, 'showApplications'])->name('jobs.show_applications');
    
    Route::delete('applications/delete/{application}', [ApplicationController::class, 'destroy'])->name('applications.delete');

    
    Route::get('users/index', [UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users/store', [UserController::class, 'store'])->name('users.store');
    Route::delete('users/delete/{user}', [UserController::class, 'destroy'])->name('users.delete');
    Route::get('users/edit/{user}', [UserController::class, 'edit'])->name('users.edit');
    Route::post('users/update/{user}', [UserController::class, 'update'])->name('users.update');
});

