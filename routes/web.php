<?php
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
Route::get("/create-laundry", [Laundry_control::class,'create']);
Route::post("/store-laundry", [Laundry_control::class,'store']);