<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\PDFController;
Use App\Http\Controllers\RequestformController;

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

Route::post('pdf',[PDFController::class,'generate_pdf']);

Route::get('index',[RequestformController::class,'index']);




