<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get("template",function(){return view('template'); });

Route::get("/",[AppController::class,"home"]);
Route::get("film",[AppController::class,"film"]);
Route::get("tambah",[AppController::class,"tambah"]);

Route::get("film/{id}/edit",[AppController::class,"edit"]);
Route::get("film/{id}/hapus",[AppController::class,"hapus"]);

Route::post("tambah",[AppController::class,"proses_tambah"]);
Route::post("edit",[AppController::class,"proses_edit"]);
