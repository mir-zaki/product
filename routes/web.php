<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\addproduct;
use App\Http\Controllers\LoginController;




Route::get('/',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'login_user'])->name('login_user');
Route::group(['middleware'=>'auth'],function()
// ,'middleware'=>'auth'

{
    Route::group(['prefix'=>'admin','middleware'=>'admin'],function (){

        //Dashboard //last
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
        //dash


        });



        Route::get('/aa',[addproduct::class,'addproduct'])->name('addproduct');
        Route::get('/manage/product',[addproduct::class,'manageproduct'])->name('manageproduct');
        Route::post('/product/post',[addproduct::class,'store'])->name('product.post');
        Route::get('/product/edit/{id}',[addproduct::class,'productedit'])->name('product.edit');
        Route::get('/product/delete/{id}',[addproduct::class,'productdelete'])->name('product.delete');
        Route::put('/product/update/{id}',[addproduct::class,'productupdate'])->name('product.update');



//Logout
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


});
