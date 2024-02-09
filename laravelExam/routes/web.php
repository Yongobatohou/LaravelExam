<?php

use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', [AuthentificationController::class, 'get_login'])->name('get.login');
Route::post('/login', [AuthentificationController::class, 'login'])->name('login');
Route::get('/register', [AuthentificationController::class, 'get_register'])->name('get.register');
Route::post('/register', [AuthentificationController::class, 'register'])->name('register');

Route::get('/', [ContactsController::class, 'index'])->name('home')->middleware('auth');

Route::get('/add-contact', [ContactsController::class, 'get_add_contact'])->name('get.add.contact');
Route::post('/add-contact', [ContactsController::class, 'add_contact'])->name('add.contact');
Route::get('/edit-contact{id}', [ContactsController::class, 'get_edit_contact'])->name('get.edit.contact');
Route::put('/edit-contact{id}', [ContactsController::class, 'edit_contact'])->name('edit.contact');
Route::get('/delete-contact{id}', [ContactsController::class, 'delete_contact'])->name('delete.contact');



