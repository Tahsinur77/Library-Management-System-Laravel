<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\adminController;
use  App\Http\Controllers\memberController;


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
//login
Route::get('/',[adminController::class,'login'])->name('login');
Route::post('/login/Submit',[adminController::class,'loginSubmit'])->middleware('userchecking')->name('loginSubmit');
//reg
Route::get('/adminReg',[adminController::class,'registration'])->name('adminReg');
Route::post('/adminReg/submit',[adminController::class,'registrationSubmit'])->name('regSubmit');

//member operation
Route::get('/memberOpertion',[memberController::class,'memberOperation'])->name('memberOperation');
Route::post('/member/reg/submit',[memberController::class,'memberSubmit'])->name('memberReg');
Route::get('/memberList',[memberController::class,'memberList'])->name('memberList');
Route::get('/member/delete/{id}',[memberController::class,'deleteMember']);