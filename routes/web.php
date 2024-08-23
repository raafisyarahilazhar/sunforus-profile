<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardProjectsController;
use App\Http\Controllers\DashboardQuotesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\RegistrationController;

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Default route laravel 8
// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/information', [InformationController::class, 'information']);
Route::get('/project', [ProjectController::class, 'project']);
Route::get('/quotes', [QuotesController::class, 'quotes']);

// middleware (auth) hanya untuk user yang ter authenticate sudah login
// Sementara guest bisa diakses oleh user yang belum login

// User Login and registration
Route::get('/login', [LoginController::class, 'index'])
        ->name('login')
        ->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function() {
        return view('dashboard.index');
})->middleware('admin');
Route::resource('/dashboard/quote', DashboardQuotesController::class)->middleware('auth');
Route::resource('/dashboard/project', DashboardProjectsController::class)->middleware('auth');

Route::get('/registration', [RegistrationController::class, 'index'])->middleware('guest');
Route::post('/registration', [RegistrationController::class, 'store']);
