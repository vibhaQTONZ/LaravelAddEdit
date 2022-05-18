<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//add-edit controller route
Route::any('add-edit/{id?}', [App\Http\Controllers\UserController::class, 'addedit'])->name('add-edit');
//insert form
Route::get('add-edit-form/{id?}', [App\Http\Controllers\UserController::class, 'edit']);
//update form route
Route::get('edit-form/{id?}', function ($id) {
    $user = User::find($id);

    return view('add-edit')->with('user',$user);
});
//Delete user route
Route::get('delete/{id?}', [App\Http\Controllers\UserController::class, 'destroy']);
