<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Product_1Controller;
use App\Models\Gallery;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Home
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/product_1', [HomeController::class, 'product_1']);
Route::get('/product_2', [HomeController::class, 'product_2']);
Route::get('/product_3', [HomeController::class, 'product_3']);
Route::get('/product_4', [HomeController::class, 'product_4']);
Route::get('/product_5', [HomeController::class, 'product_5']);
Route::get('/product_6', [HomeController::class, 'product_6']);
Route::get('/product_7', [HomeController::class, 'product_7']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/contact', [HomeController::class, 'contact']);

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

// Dashboard
Route::prefix('/admin')->middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('sliders', SliderController::class);
    Route::resource('gallerys', GalleryController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('teams', TeamController::class);

    Route::get('contact', [ContactController::class, 'index']);
    Route::put('contact/{id}', [ContactController::class, 'update']);
    Route::get('about', [AboutController::class, 'index']);
    Route::put('about/{id}', [AboutController::class, 'update']);

    Route::get('products', [Product_1Controller::class, 'index']);
    Route::put('products/{id}', [Product_1Controller::class, 'update']);
});
