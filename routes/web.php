<?php
use Illuminate\Support\Facades\Route;

use App\Http\Middleware\IsAdmin;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/anonymus', [UserController::class, 'admin_index'])->name('admin_index');
Route::post('/anonymus/login', [UserController::class, 'anonymus_login'])->name('admin_login');

Route::middleware(['IsAdmin'])->group(function () {

 	Route::get('/anonymus/dashboard', [HomeController::class, 'anonymus_dashboard'])->name('admin.dashboard');
 	Route::get('/anonymus/login', [HomeController::class, 'admin_logout'])->name('admin.logout');




});

Route::get('/sign_up', [UserController::class, 'sign_up'])->name('sign_up');
Route::post('/registration', [UserController::class, 'registration'])->name('registration');

Route::get('/sign_in', [UserController::class, 'sign_in'])->name('sign_in');
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/Booklist', [HomeController::class, 'booklist'])->name('list');
Route::get('/category', [HomeController::class, 'category'])->name('category');
Route::get('/authors', [HomeController::class, 'author'])->name('author');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');






