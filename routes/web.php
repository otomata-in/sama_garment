<?php

use App\Http\Controllers\Auth\LoginController;
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

// Auth::routes();


//app.blade :- API list
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/projects', [App\Http\Controllers\HomeController::class, 'showProjects'])->name('showprojects');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'showAbout'])->name('showabout');
Route::get('/project/{id}', [App\Http\Controllers\HomeController::class, 'showProjectData']);
Route::get('/services', [App\Http\Controllers\HomeController::class, 'showServices'])->name('showservices');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'showEnquiry'])->name('showenquiry');
Route::post('/contact/store', [App\Http\Controllers\HomeController::class, 'storeMessage']);

Route::get('/Uplus', [App\Http\Controllers\HomeController::class, 'showUplus'])->name('showuplus');
Route::get('/Uniforms', [App\Http\Controllers\HomeController::class, 'showUniforms'])->name('showuniforms');
Route::get('/Special', [App\Http\Controllers\HomeController::class, 'showSpecial'])->name('showSpecial');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/home', [App\Http\Controllers\AdminController::class, 'home'])->name('adminhome');



Route::get('/admin/project', [App\Http\Controllers\ProjectController::class, 'index']);
Route::get('/admin/project/create', [App\Http\Controllers\ProjectController::class, 'create']);
Route::post('/admin/project/store', [App\Http\Controllers\ProjectController::class, 'store']);
Route::get('/admin/project/{id}', [App\Http\Controllers\ProjectController::class, 'show']);
Route::get('/admin/project/edit/{id}', [App\Http\Controllers\ProjectController::class, 'edit']);
Route::post('/admin/project/update/{id}', [App\Http\Controllers\ProjectController::class, 'update']);
Route::get('/admin/project/delete/{id}', [App\Http\Controllers\ProjectController::class, 'destroy']);
Route::post('/admin/project/newimage/{id}', [App\Http\Controllers\ProjectController::class, 'newImage']);
Route::get('/admin/delete/projectimage/{id}/{image}', [App\Http\Controllers\ProjectController::class, 'delImage']);


Route::get('/admin/testimonial', [App\Http\Controllers\TestiMonialController::class, 'index']);
Route::get('/admin/testimonial/create', [App\Http\Controllers\TestiMonialController::class, 'create']);
Route::post('/admin/testimonial/store', [App\Http\Controllers\TestiMonialController::class, 'store']);
Route::get('/admin/testimonial/{id}', [App\Http\Controllers\TestiMonialController::class, 'show']);
Route::get('/admin/testimonial/edit/{id}', [App\Http\Controllers\TestiMonialController::class, 'edit']);
Route::post('/admin/testimonial/update/{id}', [App\Http\Controllers\TestiMonialController::class, 'update']);
Route::get('/admin/testimonial/delete/{id}', [App\Http\Controllers\TestiMonialController::class, 'destroy']);


Route::get('/admin/message', [App\Http\Controllers\ContactMessageController::class, 'index']);
Route::get('/admin/message/export', [App\Http\Controllers\ContactMessageController::class, 'exportMessages']);



Route::get('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);


Auth::routes(['login' => false, 'register' => false]);
// Route::get('user_login')->name('login')->uses('Auth\LoginController@showLoginForm');
