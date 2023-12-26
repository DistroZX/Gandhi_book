<?php
use Illuminate\Support\Facades\Route;

use App\Http\Middleware\IsAdmin;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/anonymous', [UserController::class, 'admin_index'])->name('admin_index');
Route::post('/anonymous/login', [UserController::class, 'anonymus_login'])->name('admin_login');

Route::middleware(['IsAdmin'])->group(function () {

 	Route::get('/anonymous/dashboard', [HomeController::class, 'anonymus_dashboard'])->name('admin.dashboard');
 	Route::get('/anonymous/login', [HomeController::class, 'admin_logout'])->name('admin.logout');
     //user
    Route::get('/anonymous/users', [HomeController::class, 'showUser'])->name('show');
    Route::get('/anonymous/addUserForm', [HomeController::class, 'AddUserForm'])->name('Add_user_form');
    Route::post('/anonymous/addUser', [UserController::class, 'AddUser'])->name('Add_user');
    Route::delete('show/{id}', [UserController::class, 'destroy']);
    Route::post('add_book_form', [UserController::class, 'Book_form'])->name('add_book_form');

});

Route::get('/sign_up', [UserController::class, 'sign_up'])->name('sign_up');
Route::post('/users', [UserController::class, 'store'])->name('registration');

Route::get('/sign_in', [UserController::class, 'sign_in'])->name('sign_in');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'user_logout'])->name('user.logout');
Route::get('/profile', [UserController::class, 'user_profile'])->name('user.profile');



Route::get('/Booklist', [HomeController::class, 'booklist'])->name('list');
Route::get('/category', [HomeController::class, 'category'])->name('category');
Route::get('/authors', [HomeController::class, 'author'])->name('author');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');






