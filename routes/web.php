<?php

use App\Http\Controllers\ActorController;
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
Route::get('/create',[ActorController::class,'index'])->name('page.create');
Route::get('/liste des admins',[ActorController::class,'display'])->name('page.list');
Route::post('/store',[ActorController::class,'store'])->name('page.store');
 Route::post('/update/{id}',[ActorController::class,'update'])->name('page.update');
Route::get('/delete/{id}',[ActorController::class,'delete'])->name('page.delete');
Route::get('/editer/{id}',[ActorController::class,'edit'])->name('page.edit');

