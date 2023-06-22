<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnhypenController;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\EngeneController;
use App\Http\Controllers\MusicVideoController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\AuthController;

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

// Route::get('/',function(){
//     return view ('welcome');
// })->name('ENHYPEN');
// Route::get('/members',function(){
//     return view ('members');
// })->name('ENHYPEN MEMBERS');
// Route::get('/engene',function(){
//     return view ('engene');
// })->name('ENGENE');
// Route::get('/albums',function(){
//     return view ('albums');
// })->name('ALBUMS');
// Route::get('/musicvideos',function(){
//     return view ('musicvideos');
// })->name('Music Videos');

// RECOMMENDED FORMAT FOR PRO USE
Route::get('/',[EnhypenController::class, 'index']) -> name('ENHYPEN');
Route::get('/engene',[EngeneController::class, 'index']) ->middleware('auth')->name('ENGENE');
Route::get('/albums',[AlbumsController::class, 'index'])->middleware('auth') -> name('ALBUMS');
Route::get('/members',[MembersController::class, 'index'])->middleware('auth') -> name('ENHYPEN MEMBERS');
Route::get('/musicvideo',[MusicVideoController::class, 'index'])->middleware('auth')  -> name('Music Videos');
Route::get('/register',[AuthController::class, 'register']) -> name('register');
Route::post('/register',[AuthController::class, 'create']) -> name('register.submit');
Route::get('/login',[AuthController::class, 'index']) -> name('login');
Route::get('/logout',[AuthController::class, 'logout'])->middleware('auth') -> name('logout');
Route::post('/login',[AuthController::class, 'login']) -> name('login.submit');