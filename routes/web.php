<?php
use App\Http\Controllers\LaundCat_control;
use App\Http\Controllers\Laundry_control;
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

Route::get('/home', [Laundry_control::class, 'index']);
Route::get('/create-laundry', [Laundry_control::class,'create'])->name('create');
Route::post('/store-laundry', [Laundry_control::class,'store']);
Route::get('/edit-laundry/{id}', [Laundry_control::class, 'edit'])->name('edit');
Route::patch('/update-laundry/{id}', [Laundry_control::class, 'update']);
Route::delete('/delete-book/{id}', [Laundry_control::class, 'destroy']);
Route::get('/create-list',[LaundCat_control::class,'create'])->name('create-list');
Route::post('/store-list', [LaundCat_control::class, 'store']);