<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
Route::get('/post',[PostController::class,'index'])->name('index');

Route::post('post/create',[PostController::class,'create'])->name('create');

// get取得資源 post修改資源 put/patch用來修改資料 delete用來刪除資料 any都處理 match只處理部分的route(array)
Route::post('post/delete/{id}',[PostController::class,'delete'])->name('delete');

Route::post('post/change/{id}',[PostController::class,'change'])->name("change");

Route::post('post/lastpage',[PostController::class,"lastpage"])->name('lastpage');

//route 要記的更新快取
Route::get('/', function () {
    return view('welcome');
});
